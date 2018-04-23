<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeServerController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);		
		$a_data=json_decode(json_encode($obj->get('active',"1=1")),true);		
		$c_data=json_decode(json_encode($obj->get('class',"1=1")),true);	
		//左广告
		$time = time();
		$left_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=1 && start_time<$time && end_time>$time")),true);
		//右广告
		$right_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=0 && start_time<$time && end_time>$time")),true);
		//友情链接
		$link_data=json_decode(json_encode($obj->get('link',"1=1")),true);
		//var_dump($a_data);var_dump($c_data);die;		
		$dir=__DIR__."/static/server_static.html";
		if(file_exists($dir)){
			echo file_get_contents($dir);die;
		}
		else{
			ob_start();
			$content=view("home.server_list",['a_data'=>$a_data,'c_data'=>$c_data,'net_data'=>$net_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data])->__toString();
			file_put_contents($dir,$content);
			echo $content;die;
		}	
		
		return view("home.server_list",['a_data'=>$a_data,'c_data'=>$c_data,'net_data'=>$net_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data]);
	}
	public function show($id){
		$obj=new CommonModel();
		$time = time();
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);
		$a_data=json_decode(json_encode($obj->get('active',"active_id=$id")),true)[0];
		if($time>$a_data['active_start_time'] && $time<$a_data['active_end_time']){
			$a_data['status'] = "活动已经开始";
		}else if($time<$a_data['active_start_time']){
			$a_data['status'] = "活动未开始";
		}else if($time>$a_data['active_end_time']){
			$a_data['status'] = "活动已结束";
		}
		//左广告
		$time = time();
		$left_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=1 && start_time<$time && end_time>$time")),true);
		//右广告
		$right_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=0 && start_time<$time && end_time>$time")),true);
		//友情链接
		$link_data=json_decode(json_encode($obj->get('link',"1=1")),true);
		return view("home.server_show",['a_data'=>$a_data,'net_data'=>$net_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data]);
	}
}


 ?>