<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PisoModels;
use Illuminate\Support\Facades\Validator;
use App\Imports\Import_piso;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Models\Members;
use App\Mail\Admin;
use Illuminate\Support\Facades\Mail;
class MemberController extends Controller{
    public function index(){
        $data['table']      = Members::all();
        return view('member/index',$data);

    }

    public function request_sample(Request $request){
        try {
            $data1      = $request;
            $insert = DB::table('t_request')
            ->insert([
                        'id_product'   	=>$data1['id_product'],
                        'id_size'	  	=>$data1['id_size'],
                        'province'   	=>$data1['province'],
                        'city'	=>$data1['city'],
                        'address'=>$data1['address'],
                        'note'=>$data1['note'],
                        'first_name'=>$data1['first_name'],
                        'last_name'=>$data1['last_name'],
                        'district'=>$data1['district'],
                        'zip_code'=>$data1['zip_code'],
                        'phone_number'=>$data1['phone_number'],
                ]);
               Mail::to("customboxid@gmail.com")->send(new Admin());

            if ($insert){
                $t_array['msg_type'] 	='success';
            }
            return $t_array;
        
    
        }
        catch(\Exception $e) {
            $t_array['msg_type'] 	='error';
            $t_array['msg'] 		=$e->getMessage();
            return $t_array;
       }

    }

    public function sample(){
        
        $data['table']      = Members::get_sample_request();
        return view('member/request',$data);
    }

}