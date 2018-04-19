<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Back\LinkModel;
use DB;
class BackLinkController extends Controller{
	public function add(){
         return view("back.linkadd");
	}
	public function adddo(){
		$link_type = isset($_POST['link_type'])?htmlspecialchars($_POST['link_type'],ENT_QUOTES ):"";
		$net_name = isset($_POST['net_name'])?htmlspecialchars($_POST['net_name'],ENT_QUOTES ):"";
	    $net_url = isset($_POST['net_url'])?htmlspecialchars($_POST['net_url'],ENT_QUOTES ):"";
	    $net_desc = isset($_POST['net_desc'])?htmlspecialchars($_POST['net_desc'],ENT_QUOTES ):"";
	    $img = $_FILES;
	    // var_dump($img);die;
	    $res = DB::insert('insert into `link`(link_type,net_name,net_url,net_desc) values(?,?,?,?)',["$link_type","$net_name","$net_url","$net_desc"]);
	    if($res){
	    	return redirect('backlink/show');
	    }
	}
   public function show(){
   		$count = DB::table('link')->count();//总条数
		$page = 1;//当前页数
		$total = ceil($count/3);//总页数
		$data = DB::select('select * from `link` limit 0,5');
		$data = json_decode(json_encode($data), true);
		//var_dump($data);
		return view("back.linkshow",array('arr'=>$data,'page'=>$page,'count'=>$count,'totalpage'=>$total));
	}
	public function del($link_id){
        if(!$link_id){
        	echo "删除失败！";die;
        }
        $obj=new LinkModel();
        $res=$obj->del('link',"`link_id`=$link_id");
        if($res){
        	echo "删除成功！";
        	return redirect('backlink/zhanshi');
        }
	}
   }

?>