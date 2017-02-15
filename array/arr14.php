<?php 
	$arr=array("name"=>"alex","pwd"=>"abc123",0=>"込込込");
	extract($arr);	
	
	$one="hello";
	$two="world";
	$three="低込";
	
	$a=9;
	$$a=99;
	
	//$arr=compact("one","two","three","9");
	$n=array("one","two");
	$arr=compact($n,"three");
	print_r($arr);
	
	/* $a=0;
	$$a=9999;
	echo $$a; */
	
	/* echo $name;
	echo $pwd; */
?>