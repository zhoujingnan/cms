<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
class BackLoginController extends Controller{
	public function getIndex(){
		return view('back.login');
	}
	public function getLogin(){
		$arr=$_GET;
		print_r($arr);
	}
}

 ?>