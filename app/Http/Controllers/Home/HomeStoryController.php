<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeStoryController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);	
		//故事数组
		$story_data=json_decode(json_encode($obj->get('story',"1=1")),true);
		//会员数组
		$member_data=json_decode(json_encode($obj->get('member',"1=1")),true);
		//左广告
		$time = time();
		$left_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=1 && start_time<$time && end_time>$time")),true);
		//右广告
		$right_ad_data=json_decode(json_encode($obj->get('advertising',"ad_id%2=0 && start_time<$time && end_time>$time")),true);
		//友情链接
		$link_data=json_decode(json_encode($obj->get('link',"1=1")),true);
		foreach ($member_data as $key => $val) {
			foreach ($story_data as $k => $v) {
				if($val['member_id']==$v['member_id']){
					$story_data[$k]['member_name']=$val['member_name'];
				}
			}
		}
		$dir=__DIR__."/static/story_static.html";
		if(file_exists($dir)){
			echo file_get_contents($dir);die;
		}
		else{
			ob_start();
			$content=view("home.story_list",['net_data'=>$net_data,'story_data'=>$story_data,'left_ad_data'=>$left_ad_data,'right_ad_data'=>$right_ad_data,'link_data'=>$link_data])->__toString();
			file_put_contents($dir,$content);
			echo $content;die;
		}		
	}
}


 ?>