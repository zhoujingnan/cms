<?php
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackAdminController extends Controller{
	public function index(){
		$data = DB::select('select * from `admin`');
		$data = json_decode(json_encode($data), true);
		return view('back.admin_list',['arr'=>$data]);
	}
	public function add(){
		return view('back.admin_add');
	}
	public function add_do(){
		$name = $_POST['name'];
		$pwd = md5($_POST['pwd']);
		$res = DB::insert('insert into `admin`(admin_name,admin_pwd) values(?,?)',["$name","$pwd"]);
		if($res){
			return redirect('backadmin/index');
		}
	}
}


 ?>