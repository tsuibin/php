<?php 
for($j=1;$j<=4;$j++){
	for($i=0;$i<$j;$i++){
		echo "*";
	}
	echo "<br>";
}
echo "<hr>";

for($j=0;$j<4;$j++){
	for($n=4;$n>$j;$n--){
		echo "&nbsp;";
	}
	for($i=0;$i<$j*2+1;$i++){
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";

for($j=1;$j<=7;$j++){
	if($j<=2 || $j>=6){
		echo "*****";
	}else{
		echo "&nbsp;&nbsp;*";
	}
	echo "<br>";
}




?>