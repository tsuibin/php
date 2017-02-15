<?php 
	$arr=array(1,2,3,4,5,6,7,8,9);
	
	function fun($a){
		if($a%2==1)
			return ture;
		else
			return false;	
	}
	$a=array_filter($arr,"fun");
	print_r($a);
?>