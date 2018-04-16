<?php 
//后台首页
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
class BackIndexController extends Controller{
	public function getIndex(){
		return view("back.index");
	}
	public function getTop(){
		return view("back.top");
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