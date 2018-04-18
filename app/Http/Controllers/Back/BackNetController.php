<?php 
/*
网站管理
*/
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackNetController extends Controller{
	public function index(){
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.main");
		}else{
			return view("back.main",array('arr'=>$data));
		}
	}
	public function mainlist(){
		return view("back.main_list");
	}
	public function info(){
		return view("back.main_info");
	}	
	public function message(){
		return view("back.main_message");
	}
	public function menu(){
		return view("back.main_menu");
	}
	//编辑网站信息
	public function netadd(){
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.netadd");
		}else{
			return view("back.netadd",array('arr'=>$data));
		}		
	}
	public function netdo(){
		$arr = $_POST;
		$img = $_FILES;
		//var_dump($img['logo']['name']);die;
		if($img['logo']['name']==""){
			$logo = $arr['img'];
		}else{
			if($img['logo']['error']==0){
				$postfix = substr($img['logo']['name'],strpos($img['logo']['name'],'.'));
				$logo = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["logo"]["tmp_name"],  $logo);
			}
		}
		$name = isset($_POST['name'])?htmlspecialchars($_POST['name'],ENT_QUOTES ):"";
		$keys = isset($_POST['keys'])?htmlspecialchars($_POST['keys'],ENT_QUOTES ):"";
		$url = isset($_POST['url'])?htmlspecialchars($_POST['url'],ENT_QUOTES ):"";
		$desc = isset($_POST['desc'])?htmlspecialchars($_POST['desc'],ENT_QUOTES ):"";
		$x_coord = isset($_POST['x_coord'])?htmlspecialchars($_POST['x_coord'],ENT_QUOTES ):"";
		$y_coord = isset($_POST['y_coord'])?htmlspecialchars($_POST['y_coord'],ENT_QUOTES ):"";
		$n_data = DB::select('select * from `net`');
		if(empty($n_data)){
			//添加网站信息
			$res = DB::insert('insert into `net`(net_name,net_keys,net_url,net_desc,x_coord,y_coord,logo) values(?,?,?,?,?,?,?)',["$name","$keys","$url","$desc","$x_coord","$y_coord","$logo"]);
		}else{
			//修改网站信息
			$res = DB::update("update `net` set net_name='$name',net_keys='$keys',net_url='$url',net_desc='$desc',x_coord='$x_coord',y_coord='$y_coord',logo='$logo'");
		};
		if($res){
			return redirect('backnet/index');
		}
		
	}

}


 ?>