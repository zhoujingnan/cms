<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackNetController extends Controller{
	public function getIndex(){
		return view("back.main");
	}
	public function getList(){
		return view("back.main_list");
	}
	public function getInfo(){
		return view("back.main_info");
	}	
	public function getMessage(){
		return view("back.main_message");
	}
	public function getMenu(){
		return view("back.main_menu");
	}

	public function getNetadd(){
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.netadd");
		}else{
			return view("back.netadd",array('arr'=>$data));
		}
		
	}
	public function getNetdo(){
		$arr = $_GET;
		$name = $arr['name'];
		$keys = $arr['keys'];
		$url  = $arr['url'];
		$desc = $arr['desc'];
		$x_coord = $arr['x_coord'];
		$y_coord = $arr['y_coord'];
		$n_data = DB::select('select * from `net`');
		if(empty($n_data)){
			$res = DB::insert('insert into `net`(net_name,net_keys,net_url,net_desc,x_coord,y_coord) values(?,?,?,?,?,?)',["$name","$keys","$url","$desc","$x_coord","$y_coord"]);
		}else{
			$res = DB::update("update `net` set net_name='$name',net_keys='$keys',net_url='$url',net_desc='$desc',x_coord='$x_coord',y_coord='$y_coord'");
		};
		if($res){
			return redirect('backnet');
		}
		
	}

}


 ?>