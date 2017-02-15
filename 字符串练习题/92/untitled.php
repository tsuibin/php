<?php
      $A = "Today";
      $B = "Monday";
      function print_A($A,&$B)
	   {		
			$B = $A." is ".$B;
			echo "函数中变量 A 与变量 B 的值为<br>";
			echo "变量 A:  $A <br>";
			echo "变量 B:  $B <p>";
       }
?>