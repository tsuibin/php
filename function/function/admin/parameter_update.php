<?php

/**
 * @author 
 * @copyright 2008
 */
	$parameter_id=$_POST['parameter_id'];
	$parameter_name=$_POST['parameter_name'];
	$func_id=$_POST['func_id'];
	$type_code_name=$_POST['type_code_name'];
	echo "<br />";
	$db=new mysqli("localhost","root","root","function","3306");
	function str($str,$db){
	return mysqli_real_escape_string($db,$str);
	}
	
	$id=str($func_id,$db);
	$name=str($parameter_name,$db);
	$id=str($func_id,$db);
	$code=str($type_code_name,$db);
	$pid=str($parameter_id,$db);
	
	$db->query("set names utf8");
	$sql="update func_parameter set parameter_id='$id',type_parameter_name='$name',type_code_name='$code' where parameter_id='$pid'";
	$obj=$db->query($sql);
	if($obj){
		echo "<script>";
		echo "alert('ok');";
		echo "location.href='main.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('error');";
		echo "history.go(-1);";
		echo "</script>";
	}	
?>