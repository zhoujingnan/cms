<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeIndexController extends Controller{
	public function index(){
		return view("home.index");
	}
}


 ?>