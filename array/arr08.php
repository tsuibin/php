<?php 
	$arr=array("one"=>1,"two"=>2,9=>3,4,5,6,7);
	$a=array_chunk($arr,2,true);
	print_r($a);
?>