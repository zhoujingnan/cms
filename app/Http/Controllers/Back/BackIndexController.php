<?php 
//后台首页
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackIndexController extends Controller{
	public function getIndex(){
		return view("back.index");
	}
	public function getTop(){
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.top");
		}else{
			return view("back.top",array('arr'=>$data));
		}
	}
	public function getLeft(){
		return view("back.left");
	}
	public function getSwich(){
		return view("back.swich");
	}
	public function getMain(){
		return view("back.main");
	}
	public function getBottom(){
		return view("back.bottom");
	}
}



 ?>