<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;
use Image;

class ArticleModels extends Model{
    public static function get_category(){
        $id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('t_article_category')
                ->select('*')
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['id']       = $row->id;
			$json_array['category_name']    = $row->category_name;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }
	public static function get_category_single(){
      
		
		$data1 = DB::table('t_article_category')
                ->select('*')
				->get();
	
			return $data1;
		
    }


	public static function admin_category_article_save(){
		try{
			
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			if ($id>0){
				foreach ($json_array as $key => $val){
					$update = DB::table('t_article_category')
					 		  ->where('id',$id)
					 		  ->update([
					 		  			'category_name'		=>$val['category_name'],
					 		  			
					 		  		]);
					$confirm1	=1;
				}

			}else{			
				foreach ($json_array as $key => $val){					
					$insert = DB::table('t_article_category')
					 		  ->insert([
									'category_name'		=>$val['category_name'],
					 		  		]);
					$confirm1	=1;
				}

			}

			if ($confirm1==1){
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('admin_category_article');
	        }
	        return $t_array;
		}
		catch(\Exception $e) {
 		    $t_array['msg_type']='error';
		    $t_array['msg']=$e->getMessage();
		    return $t_array;
		}
	}


	public static function get_article(){
        $id 			= request()->id;
		if ($id>0){ $sql2="id=".$id;}else{$sql2="id>0";}		
		$data1 = DB::table('t_article')
                ->select('*',DB::raw('DATE_FORMAT(adddate, "%d %M %Y") as date'))
				->whereRaw($sql2)
				->get();
		foreach ($data1 as $row) {
			$json_array['id']       		= $row->id;
			$json_array['name']    			= $row->name;
			$json_array['description']    	= $row->description;
			$json_array['img']    			= $row->img;
			$json_array['category']    		= $row->category;
			$json_array['seo_description']  = $row->seo_description;
			$json_array['seo_keyword']    	= $row->seo_keyword;
			$json_array['date']    			= $row->date;
			
		}
		if($id>0){
			return $json_array;
		}else{
			return $data1;
		}
    }

	public static function admin_article_save($request){
        try{
			$adddate    = date("Y-m-d H:i:s");
			$data       = request()->data;
			$id 		= request()->id;
			$json_array = json_decode($data, TRUE);
			$data = $request->all();
			if ($id>0){
				
					$update = DB::table('t_article')
					 		  ->where('id',$id)
					 		  ->update([
										    'name'				=>$data['name'],
										    'description'		=>$data['description'],
										    'category'			=>$data['category'],
										    'seo_description'	=>$data['seo_description'],
										    'seo_keyword'		=>$data['seo_keyword'],
					 		  			  	'adddate' 			=>$adddate
					 		  		]);
					$confirm1	=1;
					$id_article = $id;
				

			}else{			
						
					$insert = DB::table('t_article')
					 		  ->insert([
										'name'				=>$data['name'],
										'description'		=>$data['description'],
										'category'			=>$data['category'],
										'seo_description'	=>$data['seo_description'],
										'seo_keyword'		=>$data['seo_keyword'],
                                        'adddate' 			=>$adddate
					 		  		]);
					$confirm1	=1;
					$cari_id = DB::table('t_article')
							   ->select('id')
							   ->where('adddate', $adddate)
							   ->get();
					foreach ($cari_id as $row) {
						$id_article = $row->id;
					}
				

			}

			if ($confirm1==1){
				$t_array['sid'] 		= $id_article;
	            $t_array['msg_type'] 	='success';
	            $t_array['msg'] 		="Simpan data berhasil..";
	            $t_array['refresh'] 	=route('admin_article');
	        }
	        return $t_array;
        }
        catch(\Exception $e) {
            $t_array['msg_type']='error';
           $t_array['msg']=$e->getMessage();
           return $t_array;
       }
    }
}