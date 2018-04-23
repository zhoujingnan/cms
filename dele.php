<?php 
$dir="app/Http/Controllers/Home/static";
getdn($dir);
function getdn($dir){
	$dn=opendir($dir);
	while(false!==$file=readdir($dn))
	{
		if($file=='.'||$file=='..'){
			continue;
		}
		$d=$dir."/".$file;
		if(is_dir($d)){
			getdn($d);
		}else{
			unlink($d);
		}
	}
}


 ?>