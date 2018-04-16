<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Back\MemberModel;
class BackMemberController extends Controller{
	public function getIndex(){
		$obj=new MemberModel();
		$arr=json_decode(json_encode($obj->find()),true);
		return view('back.member_list')->with('arr',$arr);
	}
	public function getAdd(){
		return view('back.member_add');
	}
	public function getUpload(){echo 5;die;
		$arr=$_FILES;print_r($arr);die;
		$tmp=$arr['file']['tmp_name'];
		$fileInfo=file_get_contents($tmp);
		$filename=$_POST['file_name'];
		file_put_contents($filename,$fileInfo,FILE_APPEND);
		$arr=array(
		    'error'=>0);
		echo json_encode($arr);
	}
}

 ?>