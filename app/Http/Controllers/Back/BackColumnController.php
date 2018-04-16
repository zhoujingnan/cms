<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Back\ColumnModel;
class BackcolumnController extends Controller{
	public function getIndex(){
		$obj=new ColumnModel();
		print_r($obj);
	}
}

?>