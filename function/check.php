<?php
	header("Content-Type:text/html;charset=utf8");
	$username=$_REQUEST['username'];
	if(!empty($username)){
		if($username==alex || $username==kate){
			echo "<font color='red' size='2'>{$username}已经存在</font>";
		}else{
			echo "<font color='green' size='2'>{$username}可以注册</font>";
		}
	}
?>