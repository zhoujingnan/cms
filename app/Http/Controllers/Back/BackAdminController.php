<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackAdminController extends Controller{
	public function index(){
		echo "管理员";
	}
	public function add(){
		return view('back.admin_add');
	}
	public function add_do(){
		$name = $_POST['name'];
		$pwd = $_POST['pwd'];
		DB::insert("insert into `admin`(admin_name,admin_pwd)");
		
		
	}
}


 ?>