<?php 
namespace App\Back;
use Illuminate\Database\Eloquent\Model;
use DB;
class MemberModel extends Model{
	public function find(){
		$arr=DB::select("SELECT * FROM `member`");
		return $arr;
	}
}


 ?>