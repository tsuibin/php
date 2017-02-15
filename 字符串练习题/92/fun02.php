<?php 
	$a=100;

	function fun1($a){
		global $a;
		//unset($a);
		//$a=99;
	}
	function fun2(){
		$GLOBALS["a"]=99;
		$a=88;
	} 
	
	//fun1(999);
	echo $a;
?>