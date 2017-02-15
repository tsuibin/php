<?php

/**
 * @author 
 * @copyright 2008
 */
	
	$type_parameter_name=$_POST['type_parameter_name'];
	$func_id=$_POST['func_id'];
	$type_code_name=$_POST['type_code_name'];

	try{
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
		$sql_id="select * from func_function where func_id='$func_id'";
		$obj_name=$db->query($sql_id);
		if($obj_name->num_rows==0){
			throw new Exception('No have Function');
		}

		function str($str,$db){
		return mysqli_real_escape_string($db,$str);
		}
		$name=str($type_parameter_name,$db);
		$id=str($func_id,$db);
		$code=str($type_code_name,$db);
		
		$sql="insert into func_parameter values('','$id','$name','$code')";
	
		$flg=$obj=$db->query($sql);
		var_dump($flg);
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
	}catch(Exception $e){
		echo $e->getMessage();
	}	
	
	
?>