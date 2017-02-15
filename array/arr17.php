<?php 

	$arr=array("a2","a6","a67","a7");
	
	usort($arr,"strnatcmp");
	
	natsort($arr);//考虑自然数的排序
	
	//natcasesort(); 忽略大小写

	/* $arr=array("one"=>3,6,1,5,9,4,43);
	
	function fun($a,$b){
		//echo "a=$a b=$b<br>";
		if($a>$b)
			return 1;
		if($a==$b)
			return 0;
		if($a<$b)
			return -1;
	}
	 */
	//ksort()下标升序  krsort()下标降序
	//uksort($arr,"fun");
	
	//asort() 保留下标   arsort()
	//uasort($arr,"fun");
	
	//sort();升序   rsort()  降序
	//usort($arr,"strnatcmp"); 自定义
	
	print_r($arr);
?>