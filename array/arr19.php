<?php 
	$arr=range("a","f",1);
	
	$i=array_rand($arr);
	
	//echo $arr[$i];
	
	$img=array("01.jpg","a.jpg","yy.jpg","cat.jpg");
	
	shuffle($img);//�����������
	
	print_r($img);
	
	//print_r($arr);
?>