<?php 
/*
广告管理
*/
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use DB;
class BackAdvertisingController extends Controller{
	//添加广告
	public function add(){
		return view("back.advertisingadd");
	}
	public function add_do(){
		$ad_name = isset($_POST['ad_name'])?htmlspecialchars($_POST['ad_name'],ENT_QUOTES ):"";
		$ad_type = isset($_POST['ad_type'])?htmlspecialchars($_POST['ad_type'],ENT_QUOTES ):"";
		$ad_link = isset($_POST['ad_link'])?htmlspecialchars($_POST['ad_link'],ENT_QUOTES ):"";
		$ad_desc = isset($_POST['ad_desc'])?htmlspecialchars($_POST['ad_desc'],ENT_QUOTES ):"";
		$ad_content = isset($_POST['ad_content'])?htmlspecialchars($_POST['ad_content'],ENT_QUOTES ):"";
		$start_time = isset($_POST['start_time'])?htmlspecialchars($_POST['start_time'],ENT_QUOTES ):"";
		$start_time = strtotime($start_time);
		$end_time = isset($_POST['end_time'])?htmlspecialchars($_POST['end_time'],ENT_QUOTES ):"";
		$end_time = strtotime($end_time);
		$img = $_FILES;
		//var_dump($img);die;
		if(empty($img)){
			$ad_content = $ad_content;
		}else{
			if($img['ad_content']['error']==0){
				$postfix = substr($img['ad_content']['name'],strpos($img['ad_content']['name'],'.'));
				$ad_content = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["ad_content"]["tmp_name"],  $ad_content);
			}
		}
		$res = DB::insert('insert into `advertising`(ad_name,ad_type,ad_link,ad_desc,ad_content,start_time,end_time) values(?,?,?,?,?,?,?)',["$ad_name","$ad_type","$ad_link","$ad_desc","$ad_content","$start_time","$end_time"]);
		if($res){
			return redirect('backadvertising/ad_list');
		}
	}
	//广告展示
	public function ad_list(){
		$data = DB::select('select * from `advertising`');
		$data = json_decode(json_encode($data), true);
		//var_dump($data);
		return view("back.advertisingad_list",array('arr'=>$data));
	}
	//广告修改
	public function ad_up($id){
		$arr = DB::select("select * from `advertising` where ad_id=$id");
		$arr = json_decode(json_encode($arr), true)[0];
		//var_dump($arr);die;
		return view("back.advertisingad_up",array('arr'=>$arr));
	}
	public function up_do(){
		$ad_id = isset($_POST['ad_id'])?htmlspecialchars($_POST['ad_id'],ENT_QUOTES ):"1";
		$ad_con = isset($_POST['ad_con'])?htmlspecialchars($_POST['ad_con'],ENT_QUOTES ):"";
		$ad_name = isset($_POST['ad_name'])?htmlspecialchars($_POST['ad_name'],ENT_QUOTES ):"";
		$ad_type = isset($_POST['ad_type'])?htmlspecialchars($_POST['ad_type'],ENT_QUOTES ):"";
		$ad_link = isset($_POST['ad_link'])?htmlspecialchars($_POST['ad_link'],ENT_QUOTES ):"";
		$ad_desc = isset($_POST['ad_desc'])?htmlspecialchars($_POST['ad_desc'],ENT_QUOTES ):"";
		$ad_content = isset($_POST['ad_content'])?htmlspecialchars($_POST['ad_content'],ENT_QUOTES ):"";
		$start_time = isset($_POST['start_time'])?htmlspecialchars($_POST['start_time'],ENT_QUOTES ):"";
		$start_time = strtotime($start_time);
		$end_time = isset($_POST['end_time'])?htmlspecialchars($_POST['end_time'],ENT_QUOTES ):"";
		$end_time = strtotime($end_time);
		$img = $_FILES;
		if($ad_type==2){
			if($ad_con==""){
				if($img['ad_content']['error']==0){
					$postfix = substr($img['ad_content']['name'],strpos($img['ad_content']['name'],'.'));
					$ad_content = "images/".time()."-".rand(1000,9999).$postfix;
					move_uploaded_file($_FILES["ad_content"]["tmp_name"],  $ad_content);
				}
			}else{
				$ad_content = $ad_con;
			}			
		}
		$res = DB::update("update `advertising` set ad_name='$ad_name',ad_type='$ad_type',ad_link='$ad_link',ad_desc='$ad_desc',ad_content='$ad_content',start_time='$start_time',end_time='$end_time' where ad_id=$ad_id");
		if($res){
			return redirect('backadvertising/ad_list');
		}
	}
}



 ?>