<?php 
	function fun(){
		func_get_args();//所有参数，返回一个数组
		func_num_args();//返回几个参数
		func_get_arg(0);//返回指定参数
		/* $arr=func_get_args();
		print_r($arr); */
		/* $n=func_num_args();
		echo $n; */
		/* $arg=func_get_arg(9);
		echo $arg; */
	}
	
	fun("a","b","c","d");

?>