<?php
$db=new Mysqli("localhost","root","root","function","6033");
$db->query("set names utf8");
$obj=$db->query("select func_id,func_name from func_function");
echo "<div style='width:900px;'>";
while($row=$obj->fetch_assoc()){
	echo "<span style='width:100px;'>";
	
	//echo $row['func_id'];
	
	echo "<a href='index.php?f=".$row['func_id']."'>".$row['func_name']."</a> ";
	
	echo "</span>";
}
echo "</div>";



?>