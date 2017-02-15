<?php

	function fun1(){
		return "hello";
	}
	if(function_exists("fun1"))
		$f=fun1();
	var_dump($f);
?>