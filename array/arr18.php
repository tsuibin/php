<?php 
	$arr1=array(1,2,3);
	$arr2=array(3,5,6);
	
	echo "<h2>";
	$arr=array_intersect_assoc($arr1,$arr2);
	print_r($arr);
	/* $arr=array_diff($arr1,$arr2);//差集
	print_r($arr);
	$arr=array_diff_assoc($arr1,$arr2);//考虑下标的差集
	print_r($arr); */
	
	
	/* $arr=$arr1+$arr2;
	print_r($arr);
	echo "<br />";
	$arr=array_merge($arr1,$arr2);
	print_r($arr);
	echo "<br />";
	$arr=array_merge_recursive($arr1,$arr2);
	print_r($arr); */
?>