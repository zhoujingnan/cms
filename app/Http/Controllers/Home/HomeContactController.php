<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeContactController extends Controller{
	public function index(){
		return view("home.contact_list");
	}
}


 ?>