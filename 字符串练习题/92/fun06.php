<?php 
	function fun(){
		func_get_args();//���в���������һ������
		func_num_args();//���ؼ�������
		func_get_arg(0);//����ָ������
		/* $arr=func_get_args();
		print_r($arr); */
		/* $n=func_num_args();
		echo $n; */
		/* $arg=func_get_arg(9);
		echo $arg; */
	}
	
	fun("a","b","c","d");

?>