<?php 
	$arr1[0]=array("alex");
	$arr1[0][1]="hello";
	
	$arr1[][1]="world";
	$arr1[][1]="earth";
	
	//echo $arr1[0][0];
	
	
	/* 姓名  年龄  性别
	alex   23    man
	kate   24    woman */
	
	
	$arr[201]["name"]="alex";
	$arr[201]["age"]=23;
	$arr[201]["sex"]="man";
	
	$arr[1]["name"]="kate";
	$arr[1]["age"]=24;
	$arr[1]["sex"]="woman";
	
	$arr=array(201=>array("name"=>"alex",23,"man"));
	
	
	print_r($arr);
	
	
	//print_r($arr1);
?>