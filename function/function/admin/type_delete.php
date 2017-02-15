<?php
$ftype_id=$_GET['type_id'];
	if(!empty($ftype_id)){
		try{
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
		function str($str,$db){
		return mysqli_real_escape_string($db,$str);
		}
		$ftype_id=str($ftype_id,$db);
		$sql="delete from func_ftype where ftype_id='{$ftype_id}'";
	
		$flg=$obj=$db->query($sql);
		var_dump($flg);
		if(!$flg){
			throw new Exception('删除失败');
		}
		
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
	
	}
	
?>