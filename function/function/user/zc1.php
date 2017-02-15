<?php
	//session_start();
	$con=new mysqli("localhost","root","root","user");//链接数据库
	$con->query("set names utf8");//改变字符编码
	extract($_REQUEST);
	//$pwd=md5($password);
	$regtime=date("Y-m-d");
	$sql="select * from func_user1 where u_name='{$username}'";//数据库中查询
	$result=$con->query($sql);
	if($result->num_rows>0){
		echo "<script>alert('用户名已存在！');history.back();</script>";
		exit;
	}else{
		$sql="insert func_user1 			        																					    	        values(default,1,'{$username}','{$password}','{$sex}','{$email}','{$tel}','{$qq}')";//表单提交过来的信息
		//echo $sql;
		$result=$con->query($sql);
				//$_SESSION["u_name"]=$username;
	if($con->affected_rows>0){
			echo "<script>alert('恭喜！注册成功！');window.location='denglu.php';</script>";
	}
	}
	$con->close();	 
	
?>