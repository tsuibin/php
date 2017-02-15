<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<form class="sll" method="get">
  <div align="center">
  <input type="text"  width="500" height="20" name="search"/>
  <input type="submit" value="搜索"  />
  </div>
</form>

<div align="center">
<?php
 /*
if(!empty($keyword)){
	function __autoload($classname){
    	include_once "./include/class/{$classname}_class.php";        
   }
	$db=new Database();
	$r=$db->searchdata($keyword);
	//var_dump($r);
	if(is_array($r)){
		foreach($r as $v){
			if(is_array($v)){
				foreach($v as $key=>$func){
					echo "<a href='?f={$key}'>$func</a> ";
				}
			}
		}
	}else{
		echo "没有找到相关函数";	
	}
		//include_once "smarty.php";
	//$tpl->caching=ture;
	//$tpl->cache_lifetime=5;
	//$tpl->display("results.tpl");
   //print_r($r);
}
*/
?>
</div>
</body>
</html>