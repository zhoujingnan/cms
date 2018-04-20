<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeAboutController extends Controller{
	public function index(){
		return view("home.about_list");
	}
}


 ?>