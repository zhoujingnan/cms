<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeServerController extends Controller{
	public function index(){
		return view("home.server_list");
	}
}


 ?>