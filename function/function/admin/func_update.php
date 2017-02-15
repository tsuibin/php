<?php

/**
 * @author 
 * @copyright 2008
 */
	
	$func_id=$_POST['func_id'];
	$func_name=$_POST['func_name'];
	$func_ftype=$_POST['func_ftype'];
	$func_breif=$_POST['func_breif'];
	$func_origin=$_POST['func_origin'];
	$func_return=implode(" ",$_POST['func_return']);
	$func_ver=implode(" ",$_POST['func_ver']);
	$func_level=$_POST['func_level'][0];
	$func_detail=$_POST['func_detail'];
	$func_other=$_POST['func_other'];
	echo "<br />";
	
	$db=new mysqli("localhost","root","root","function","3306");

	function str($str,$db){
	return mysqli_real_escape_string($db,$str);
	}
	$id=str($func_id,$db);

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
	$sql="update func_function set func_name='$name',ftype_id='$ftype',func_breif='$breif',func_origin='$origin',func_return='$return',func_level='$level',func_detail='$detail',func_other='$other' where func_id=$id ";

	$obj=$db->query($sql);

	if($obj){
		echo "<script>";
		echo "alert('ok');";
		echo "location.href='func_list.php';";
		echo "</script>";
	}else{
		echo "<script>";
		echo "alert('error');";
		echo "history.go(-1);";
		echo "</script>";
	}
	
	
	
?>