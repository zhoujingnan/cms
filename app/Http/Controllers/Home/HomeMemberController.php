<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeMemberController extends Controller{
	public function index(){
		return view("home.member_list");
	}
}


 ?>