<?php 
	$arr=array("One"=>"abc","Two"=>"xyz");
	
	$a=array_change_key_case($arr,CASE_UPPER);//CASE_LOWER
	
	print_r($arr);
?>