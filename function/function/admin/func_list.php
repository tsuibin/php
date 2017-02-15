<?php
	$db=new Mysqli("localhost","root","root","function","3306");
	$db->query("set names utf8");
	$obj=$db->query("select func_id,func_name from func_function ORDER BY `func_function`.`func_id` DESC limit 30");
	echo "<div style='width:900px;'>";
	while($row=$obj->fetch_assoc()){
		echo "<a href='func_view.php?id=".$row['func_id']."'>".$row['func_name']."</a><br / ";
	}
	echo "</div>";
?>
