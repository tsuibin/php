<?php

/**
 * @author 
 * @copyright 2008
 */
	$func_name=$_POST['func_name'];
	$func_ftype=$_POST['func_ftype'];
	$func_breif=$_POST['func_breif'];
	$func_origin=$_POST['func_origin'];
	$func_return;
	if(!empty($_POST['func_return'])){
		$func_return=implode(" ",$_POST['func_return']);
	}
	$func_ver;
	if(!empty($_POST['func_ver'])){
		$func_ver=implode(" ",$_POST['func_ver']);
	}	
	$func_ver=implode(" ",$_POST['func_ver']);
	$func_level=$_POST['func_level'][0];
	$func_detail=$_POST['func_detail'];
	$func_other=$_POST['func_other'];
	echo "<br />";
	try{
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
		$sql_id="select * from func_ftype where ftype_id='$func_ftype'";
		$obj_name=$db->query($sql_id);
		if($obj_name->num_rows==0){
			throw new Exception('No have Function Type');
		}
		function str($str,$db){
			return mysqli_real_escape_string($db,$str);
		}
		$name=str($func_name,$db);
		$ftype=str($func_ftype,$db);
		$breif=str($func_breif,$db);
		$origin=str($func_origin,$db);
		$return=str($func_return,$db);
		$ver=str($func_ver,$db);
		$level=str($func_level,$db);
		$detail=str($func_detail,$db);
		$other=str($func_other,$db);
		$db->query("set names utf8");
		$sql="insert into func_function values('','$ftype','$name','$breif','$origin','$return','$ver','$level','$detail','$other','')";
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
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>