<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Back\ActiveModel;
class BackActiveController extends Controller{
	//活动首页
	public function index(){
		$obj=new ActiveModel();
		//总条数
		$count=$obj->count("active");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('active',"1=1",$offet,$limit)),true);
		return view('back.active_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
}

 ?>