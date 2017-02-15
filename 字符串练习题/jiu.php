<?php
	$bg="";
	echo "<table border='2'>";
	for($i = 1;$i < 10;$i++){
		if($i % 2 == 1){
			$bg="#b7ba6b";
		
		}else{
			$bg="#deab8a";
		}
		echo "<tr onmouseover='show1(this)' onmouseout='show2(this)' bgcolor=$bg>";
		for($j = 1;$j < 10;$j++){
			if($j <= $i){
				echo "<td>".$i."*".$j."=".$i*$j."</td>";			
			}else{
				echo "<td>&nbsp;&nbsp;</td>";
			}
		}	
		echo "</tr>";
	}
	echo "</table>";
?>
<script>
var color = null;
function show1(obj){
	color=obj.bgColor;
	obj.bgColor = "#b22c46";
}
function show2(obj){
	obj.bgColor = color;
}
</script>