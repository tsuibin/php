<?php 

	/* function fun($v){
		return $v+100;
	}
	$arr=array(1,2,3,4,5);
	$a=array_map("fun",$arr);
	print_r($a); */
	
	function fun(&$v,$k,$u){
		$v+=$u;
		echo "$k $u<br>";
	}
	$arr=array(1,2,3,4,5);
	$a=array_walk($arr,"fun",99);
	print_r($arr);
?>