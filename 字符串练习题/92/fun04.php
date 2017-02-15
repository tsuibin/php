<?php 
	function fun1($a,&$b){
		$a=99;
		$b=999;
	}
	
	$i=1;
	$j=1;
	
	fun1($i,$j);
	
	echo "$i  $j";

?>