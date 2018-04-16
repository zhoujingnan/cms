<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
class BackNetController extends Controller{
	public function getIndex(){
		return view("back.main");
	}
	public function getList(){
		return view("back.main_list");
	}
	public function getInfo(){
		return view("back.main_info");
	}	
	public function getMessage(){
		return view("back.main_message");
	}
	public function getMenu(){
		return view("back.main_menu");
	}		

}


 ?>