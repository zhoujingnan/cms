<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class HomeStoryController extends Controller{
	public function index(){
		return view("home.story_list");
	}
}


 ?>