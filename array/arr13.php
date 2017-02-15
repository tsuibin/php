<?php 
	$arr=array(1,2,3,"4abc",5,"6",array("one"=>"1",2));
	
	
	$b=in_array(4,$arr);
	var_dump($b);
	
	echo "<br>";
	$s=array_search(1,$arr,true);
	var_dump($s);
	
	echo "<br>";
	$k=array_key_exists("03",$arr);
	var_dump($k);
?>