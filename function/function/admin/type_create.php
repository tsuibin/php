<?php
	$ftype_name=$_POST['type_name'];
	if(!empty($ftype_name)){
	try{
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
//		$sql_id="select * from func_function where func_id='$func_id'";
//		$obj_name=$db->query($sql_id);
//		if($obj_name->num_rows==0){
//			throw new Exception('No have Function');
//		}

		function str($str,$db){
		return mysqli_real_escape_string($db,$str);
		}
		$ftype_name=str($ftype_name,$db);
		$sql="insert into func_ftype values('','$ftype_name')";
	
		$flg=$obj=$db->query($sql);
		var_dump($flg);
		if(!$flg){
			throw new Exception('添加失败');
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