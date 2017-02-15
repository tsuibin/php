<?php 

	$arr[]=array(1,2,3);
	$arr[]=array(4,5);

	echo "<table border='1'>";
	foreach($arr as $k=>&$line){
		echo "<tr>";
		foreach($line as $key=>&$v){
			$v+=100;
			echo "<td>".$v."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	//print_r($arr);
	/* $arr=array(1,2,3,4,5,6,7);
	
	foreach($arr as $k=>&$v){
		$v+=100;
		$k+=100;
		echo $k.".....".$v."<br />";
	}
	
	print_r($arr); */
?>