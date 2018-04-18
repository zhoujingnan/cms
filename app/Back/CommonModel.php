<?php 
namespace App\Back;
use Illuminate\Database\Eloquent\Model;
use DB;
class CommonModel extends Model{
	//总条数
	public function count($tableName){
		$count=DB::select("SELECT * FROM `$tableName`");
		return count($count);
	}
	//查询数据
	public function get($tableName,$where="1=1"){
		$arr=DB::select("SELECT * FROM `$tableName` WHERE $where");
		return $arr;
	}
	//带limit查询数据
	public function select($tableName,$where="1=1",$offet,$limit){
		$arr=DB::select("SELECT * FROM `$tableName` WHERE $where LIMIT $offet,$limit");
		return $arr;		
	}
	//删除
	public function del($tableName,$where="1=1"){
		$res=DB::delete("DELETE FROM `$tableName` WHERE $where");
		return $res;
	}
	//修改
	public function upd($tableName,$arr,$where="1=1"){
		$str='';
		foreach ($arr as $key => $val) {
			$str.="`$key`='$val',";
		}
		$str=rtrim($str,",");
		$res=DB::update("UPDATE `$tableName` SET $str WHERE $where");
		return $res;

	}
	//添加
	public function add($tableName,$arr){
		$k='';
		$v='';
		foreach ($arr as $key => $val) {
			$k.="`$key`,";
			$v.="'$val',";
		}
		$k=rtrim($k,",");
		$v=rtrim($v,",");
		$res=DB::insert("INSERT INTO `$tableName`($k) VALUES($v)");
		return $res;
	}

}

 ?>