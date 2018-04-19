<?php
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use DB;
class BackAdminController extends BackCommonController{
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
	public function sole(){
		$name = $_GET['name'];
		$res = DB::select("select * from `admin` where admin_name='$name'");
		if($res){
			return 0;
		}else{
			return 1;
		}
	}
	public function del(){
		$id = $_GET['id'];
		$res = DB::delete("delete from `admin` where admin_id=$id");
		if($res){
			return 1;
		}
	}
}


 ?>