<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TransactionModels;
use DB;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;
class TransactionController extends Controller{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
 
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }
    public function create_payment()
    {
        \DB::transaction(function(){
            // Save donasi ke database
            $donation = TransactionModels::create([
                'first_name' => $this->request->first_name,
                'last_name' => $this->request->last_name,
                'amount' => floatval($this->request->amount),
                'address' => $this->request->address,
                'note' => $this->request->note,
                'email' => $this->request->email,
                'qty' => $this->request->qty,
                'phone' => $this->request->phone,
                'amount_shipping' => floatval($this->request->amount_shipping),
                'courier' => $this->request->courier,
            ]);
            // save detail transaksi
            $detail = array();
            foreach($this->request->detail as $row){
              $dat = array(
                        'id_transaction'=> $donation->id,
                        'product_id' =>$row['product_id'],
                        'qty'=>$row['qty'],
                        'berat'=>$row['berat'],
                        'harga'=>$row['harga'],
                        'sub_total' =>$row['sub_total']
              );
              $send['id']=$row['product_id'];
              $send['price']=$row['harga'];
              $send['quantity']=$row['qty'];
              $send['name']=$row['title'];

              array_push($detail,$send);
              TransactionModels::add_details($dat);
            }
            $shipping['id']=$donation->id;
            $shipping['price']= floatval($this->request->amount_shipping);
            $shipping['quantity']=1;
            $shipping['name']= $this->request->courier;
            array_push($detail,$shipping);
 
            // Buat transaksi ke midtrans kemudian save snap tokennya.
            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->id,
                    'gross_amount'  => $donation->amount,
                ],
                'customer_details' => [
                    'first_name'    => $donation->first_name,
                    'email'         => $donation->email,
                    'phone'         => $donation->phone,
                    'address'       =>  $donation->address,
                ],
                'item_details' => $detail
            ];
            $snapToken = Veritrans_Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();
 
            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });
 
        return response()->json($this->response);
    }
 
    /**
     * Midtrans notification handler.
     *
     * @param Request $request
     * 
     * @return void
     */
    public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {
 
          $transaction = $notif->transaction_status;
          $type = $notif->payment_type;
          $orderId = $notif->order_id;
          $fraud = $notif->fraud_status;
          $donation = TransactionModels::findOrFail($orderId);
 
          if ($transaction == 'capture') {
 
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
 
              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $donation->addUpdate("Transaction order_id: " . $orderId ." is challenged by FDS");
                $donation->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully captured using " . $type);
                $donation->setSuccess();
              }
 
            }
 
          } elseif ($transaction == 'settlement') {
 
            // TODO set payment status in merchant's database to 'Settlement'
            // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully transfered using " . $type);
            $donation->setSuccess();
 
          } elseif($transaction == 'pending'){
 
            // TODO set payment status in merchant's database to 'Pending'
            // $donation->addUpdate("Waiting customer to finish transaction order_id: " . $orderId . " using " . $type);
            $donation->setPending();
 
          } elseif ($transaction == 'deny') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is Failed.");
            $donation->setFailed();
 
          } elseif ($transaction == 'expire') {
 
            // TODO set payment status in merchant's database to 'expire'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is expired.");
            $donation->setExpired();
 
          } elseif ($transaction == 'cancel') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is canceled.");
            $donation->setFailed();
 
          }
 
        });
 
        return;
    }

    public function new_order(){
      $data['table']      = TransactionModels::all();
        return view('order/index',$data);

    }

    public function review_detail_transaction(Request $request){
      $id_transaction = $request->id;
      $data = DB::table('t_transaction_detail as a')->select('a.*','b.title as product_name')->leftjoin('t_post_project as b','a.product_id','=','b.id')->where('id_transaction',$id_transaction)->get();
      return $data;
    }
 

}