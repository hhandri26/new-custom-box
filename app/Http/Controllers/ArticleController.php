<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Submenu;
use App\Models\HomeModels;
use App\Models\ArticleModels;
use Alert;
use DB;
use App\User;

class ArticleController extends Controller{

   

    public function admin_category_article(){
        $data['table']      = ArticleModels::get_category();
        return view('article_category/table',$data);

    }

    public function admin_category_article_form(){
        return view('article_category/form');

    }

    public function admin_category_article_save(){
        return ArticleModels::admin_category_article_save();

    }

    public function admin_category_article_edit(){
		$data['get']      	=ArticleModels::get_category();
		return view('article_category/form',$data);
	}


    public function admin_article(){
        $data['table']      = ArticleModels::get_article();
        return view('article/table',$data);
    }

    public function admin_article_form(){
        $data['category']      	=ArticleModels::get_category();
        return view('article/form',$data);

    }

    public function admin_article_save(Request $request){
        return ArticleModels::admin_article_save($request);

    }

    public function admin_article_edit()
	{
        $data['category']   =ArticleModels::get_category_single();
		$data['get']      	=ArticleModels::get_article();
		return view('article/form',$data);
	}

    public function blog(){
        $data['category']   =ArticleModels::get_category_single();
        $data['table']      = DB::table('t_article')->select('*',DB::raw('DATE_FORMAT(adddate, "%d %M %Y") as date'))->paginate(5);
        return view('article/view',$data);
    }

    public function blog_detail(Request $request){
        $data['get']      = ArticleModels::get_article();
        return view('article/detail',$data);
		
	}

    public function search_blog(Request $request){
        $search = $request->search;

        var_dump($search);die();
        $data['category']   =ArticleModels::get_category_single();
        $data['table']      = DB::table('t_article')
                              ->select('*',DB::raw('DATE_FORMAT(adddate, "%d %M %Y") as date'))
                              ->where('name', 'like', '%'.$search.'%')
                              ->orWhere('description', 'like','%'.$search.'%')
                              ->orWhere('category', 'like','%'.$search.'%')
                              ->paginate(5);
        return view('article/view',$data);

    }


}