<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
use App\libs\PHPMailer;
class HomeContactController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);	
// print_r($net_data);die;
		return view("home.contact_list",['net_data'=>$net_data]);
	}
	public function redis(){
		$arr=$_GET;
		unset($arr['_token']);
		$mail=new PHPMailer();
		print_r($mail);die;
	}
}


 ?>