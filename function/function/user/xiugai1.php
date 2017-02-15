<?php 
	$id=$_GET['u_id'];
	extract($_REQUEST);
	//$add=$address.$city; 
	$con=new mysqli("localhost","root","root","user");
	$con->query("set names utf8");
/* 	$sql="update tb_user set user_sex='{$sex}',user_email='{$email}',user_tel='{$tel}',user_add='{$add}' where user_name='{$uname}'"; */
	$sql="update func_user1 set u_name='{$textfield3}',u_password='{$textfield7}',tel='{$textfield4}',six='{$textfield5}',email='{$textfield6}',qq='{$textfield8}' where u_id={$id}";
	$rs=$con->query($sql);
		if($con->affected_rows>0){
		echo "<script>alert('修改成功！');history.back();</script>";
		exit;
	}else{
		echo "<script>alert('信息无修改');history.back();</script>";
		exit;
	}
?>