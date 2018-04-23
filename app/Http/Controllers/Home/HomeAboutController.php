<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeAboutController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$con_data=json_decode(json_encode($obj->get('contact',"1=1")),true)[0];
		$net_data=json_decode(json_encode($obj->get('net',"1=1")),true)[0];
		//左广告
		$time = time();
		$left_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=1 && start_time<$time && end_time>$time")),true);
		//右广告
		$right_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=0 && start_time<$time && end_time>$time")),true);
		//友情链接
		$link_data=json_decode(json_encode($obj->get('link',"1=1")),true);
		$dir=__DIR__."/static/about_static.html";
		if(file_exists($dir)){
			echo file_get_contents($dir);die;
		}
		else{
			ob_start();
			$content=view("home.about_list",array('con_data'=>$con_data,'net_data'=>$net_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data))->__toString();
			file_put_contents($dir,$content);
			echo $content;die;
		}
		
	}
}


 ?>