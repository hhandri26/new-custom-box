<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Submenu;
use App\Models\Members;
use Alert;
use DB;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function signup(Request $request)
    {
        
        $this->validate($request,[
            'name'      => 'required|unique:users',
            'email'     => 'required|unique:users',
            'password'  => 'required',
        ]);

        return User::create([
            'name'      => $request->json('name'),
            'email'     => $request->json('email'),
            'password'  => bcrypt($request->json('password')),
        ]);
    }

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required',
        ]);

        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
           
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        // all good so return the token
        // update token api to table user
        $sukses = 200;
        $userid = $request->user()->id;
        $update = DB::table('users')
                  ->where('id',$userid)
                  ->update(['token_api' =>$token]);
        // return response()->json([
        //     'username'   => $request->user()->name,
        //     'status'    => $sukses,
        //     'user_id'   => $request->user()->id,
        //     'token'     => $token,
        // ]);
        if($token !==''){
            $data['status'] = "200";
            $data['username'] = $request->user()->name;
            $data['user_id'] = $request->user()->id;
            $data['token'] = $token;
            $data['login'] = true;

        }else{
            $data['status']     = 400;
            $data['error_msg']  ='Email Atau Password Salah';

        }
       
        return $data;

    }

    public function register(Request $request){
        
        $this->validate($request,[
            'phone_number'      => 'required|unique:t_member',
            'email'     => 'required|unique:t_member',
            'password'  => 'required',
        ]);

        return Members::create([
            'first_name'      => $request->json('first_name'),
            'last_name'     => $request->json('last_name'),
            'password'  => $request->json('password'),
            'email'      => $request->json('email'),
            'phone_number'     => $request->json('phone_number'),
            'provinsi_id'=> $request->json('province_id'),
            'kota_id'=> $request->json('city_id'),
            'address'=> $request->json('address'),
        ]);

    }

    public function login_vue(Request $request){
        try {
			$get  = DB::table('t_member')->where('email',$request->username)->where('password',$request->password)->pluck('id')->first();
			if($get!==null){
				$data 			= DB::table('t_member')->where('email',$request->username)->where('password',$request->password)->first();
			
				
				$t_array['msg_type'] 	='success';
				$t_array['msg'] 		="Berhasil login";
				$t_array['data'] 		= $data;

			}else{
				return response()->json(['message' => 'Username dan password salah !'], 404);
				
			}
			return $t_array;


		}
		catch(\Exception $e) {
			$t_array['msg_type'] 	='error';
			$t_array['msg'] 		=$e->getMessage();
			return $t_array;
		}

    }

    
}
