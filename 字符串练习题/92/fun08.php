<?php 
	function fun1(){
		static $i=0;
		$i++;
		if($i>5){
			return;
		}else{
			echo "fun".$i."<br>";
			fun1();
		}
	}
	
	function fun2($num){
		if($num==1)
			return 1;
		else
			return $num+fun2($num-1);
	}
	
	echo fun2(100);
	
?>



