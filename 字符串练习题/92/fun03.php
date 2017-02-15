<?php 
	function fun1(){
		static $a=0;
		$a++;
		echo $a;
	}
	
	fun1();
	fun1();
	fun1();
?>