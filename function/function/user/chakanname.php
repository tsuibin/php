<?php
	//session_start();

	//header("Content-Type:text/html;charset=utf8");
	$usernam=$_GET['username'];
	if(!empty($username)){
		$con=new mysqli("localhost","root","root","user");
		$sql="select * from func_user1 where u_name='{$usernam}'";
		$result=$con->query($sql);
		if($result->num_rows!==0){
			echo "<font color='red' size='2'>{$usernam}已经存在</font>";
		}else{
			echo "<font color='green' size='2'>{$usernam}可以注册</font>";
		}
	}
?>