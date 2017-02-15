<?php
session_start();
header("Content-type:text/html;charset=utf8");
$username=$_REQUEST['u'];
$pwd=$_REQUEST['p'];
$_SESSION['uname']=$username;
$_SESSION['upwd']=$pwd;
if(!empty($username) and !empty($pwd)){
	if($username=="root" && $pwd=="root")
	{
		echo "{$username} login success !";
	}
	else
	{
		echo "{$_SESSION['uname']} login false,the username or password was wrong!";
	}
}
?>