<?php 
	$arr=array(9=>1,2,3,4,5,6,7);
	
	
	while($v=current($arr)){
		echo $v."<br>";
		next($arr);
	}
	
	for($i=0;$i<count($arr);$i++,next($arr)){
		$k=key($arr);
		$v=current($arr);
		
	}
	
	
	//echo count($arr);
	//echo key($arr);echo key($arr);
	//echo current($arr);echo current($arr);
	/* while($v=next($arr)){
		echo $v."<br>";
	} */
	
	
	//end($arr);
	//echo reset($arr);
	//var_dump(next($arr));
	//var_dump(prev($arr));
	//print_r(each($arr));
?>