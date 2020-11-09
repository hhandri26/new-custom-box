<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
 
class Admin extends Mailable
{
    use Queueable, SerializesModels;
 
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $data1  = $request;
        return $this->from('infranetsystem2@gmail.com')
                   ->view('email')
                   ->with(
                    [
                        'product'   	=>$data1['id_product'],
                        'size'	  	    =>$data1['id_size'],
                        'province'   	=>$data1['province'],
                        'city'	        =>$data1['city'],
                        'address'       =>$data1['address'],
                        'note'          =>$data1['note'],
                        'first_name'    =>$data1['first_name'],
                        'last_name'     =>$data1['last_name'],
                        'district'      =>$data1['district'],
                        'zip_code'      =>$data1['zip_code'],
                        'phone_number'  =>$data1['phone_number'],
                    ]);
    }
}