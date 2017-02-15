<?php
	$db=new Mysqli("localhost","root","root","function","3306");
	$db->query("set names utf8");
	$obj=$db->query("select parameter_id,type_parameter_name from func_parameter limit 30");
	echo "<div style='width:900px;'>";
	while($row=$obj->fetch_assoc()){
		echo "<a href='parameter_view.php?id=".$row['parameter_id']."'>".$row['type_parameter_name']."</a><br / ";
		
	}
	echo "</div>";
?>
