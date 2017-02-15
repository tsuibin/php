用户组类型<br />
<?php
		$db=new Mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
	$obju=$db->query("select utype_id,utype_name from func_utype limit 30");

	while($rowu=$obju->fetch_assoc()){
		echo "<a href='utype_view.php?id={$rowu['utype_id']}&utype={$rowu['utype_name']}'>".$rowu['utype_name']."</a><br / ";
	}

?>