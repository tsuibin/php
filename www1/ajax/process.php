<?php
	$username=$_REQUEST["username"];
	if($username)
	{
		if($username==alex || $username==kate)
		{
			echo "<font color='red'>{$username}此用户名已经存在</font>";
		}
		else
		{
			echo "<font color='green'>{$username}此用户名可以注册</font>";
		}
	}
	else
	{
		echo "<font color='red'>请输入用户名</font>";
	}
?>