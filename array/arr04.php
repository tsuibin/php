<?php 
	$arr1[]=array(1,2,3);
	$arr1[]=3.14;
	
	foreach($arr1 as $line){
		if(is_array($line)){
			foreach($line as $v){
				echo $v;
			}
		}else{
			echo $line;
		}
		echo "<br>";
	}
	
	print_r($arr1);
?>