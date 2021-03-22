<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Submenu;
use App\Models\HomeModels;
use Alert;
use DB;
use App\User;

class FrontController extends Controller
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
        $dat['product'] =   DB::table('t_post_project')
                            ->select('*')
                            ->get();
        $dat['project'] = DB::table('t_past_project')
                        ->select('*')
                        ->get();
        $dat['models'] = DB::table('t_models')
                        ->select('*')
                        ->get();
        return view('front2/index',$dat);
        
            
    }

    public function models(){
        $dat['models'] = DB::table('t_models')
                        ->select('*')
                        ->get();
        return view('front2/models',$dat); 
    }

    public function models_detail(){
        return view('front2/models_detail'); 
    }

    public function checkout(){
        return view('front/checkout');        

    }

    public function contact(){
        return view('front2/contact_us');        

    }

    public function shop(){
        return view('front/shop');   

    }

    public function product_detail(){
        return view('front/product_detail');

    }

    public function gallery(){
        return view('front2/gallery');

    }
    public function sample(){
        return view('front2/sample');
        
    }

    public function login_member(){
        return view('front/login');

    }

    public function register_member(){
        return view('front/signin');

    }
}