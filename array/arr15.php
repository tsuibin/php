<?php 
	//队列
	$arr=array(1,2,3);
	array_shift($arr);//对头出队
	array_pop($arr);//队尾出队
	
	array_push($arr,9);//队尾入队
	array_unshift($arr,99);//队头入队
	
	print_r($arr);

	//栈
	/* $arr=array();
	
	array_push($arr,"hello","yyy");//入栈
	array_push($arr,"zzz");
	
	array_pop($arr);//出栈
	
	print_r($arr); */
	
?>