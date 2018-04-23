<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeIndexController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//栏目表（服务）
		$arr=json_decode(json_encode($obj->get('column',"1=1")),true);
		$server_data=array();
		foreach ($arr as $key => $val) {
			$server_data[$val['column_display']][]=$val;
		}
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);
		//故事表
		$story_data=json_decode(json_encode($obj->get('story',"1=1")),true);
		//活动表
		$active_data=json_decode(json_encode($obj->get('active',"1=1")),true);
		//管理员
		$admin_data=json_decode(json_encode($obj->get('admin',"1=1")),true);
		//左广告
		$time = time();
		$left_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=1 && start_time<$time && end_time>$time")),true);
		//右广告
		$right_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=0 && start_time<$time && end_time>$time")),true);
		//友情链接
		$link_data=json_decode(json_encode($obj->get('link',"1=1")),true);
		// print_r($server_data);
		// print_r($net_data);
		// print_r($story_data);
		// print_r($active_data);
		// print_r($admin_data);
		$dir=__DIR__."/static/index_static.html";
		if(file_exists($dir)){
			echo file_get_contents($dir);die;
		}
		else{
			ob_start();
			$content=view("home.index",['server_data'=>$server_data,'net_data'=>$net_data,'story_data'=>$story_data,'active_data'=>$active_data,'admin_data'=>$admin_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data])->__toString();
			file_put_contents($dir,$content);
			echo $content;die;
		}
		
		return view("home.index",['server_data'=>$server_data,'net_data'=>$net_data,'story_data'=>$story_data,'active_data'=>$active_data,'admin_data'=>$admin_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data]);
	}
}


 ?>