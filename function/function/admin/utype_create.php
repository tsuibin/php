<?php

/**
 * @author 
 * @copyright 2008
 */
 
 print_r(	$utype_name=$_POST['utype_name']);
print_r(	$utype_type=$_POST['utype_type']);
print_r(	$utype_auth=$_POST['utype_auth']);
if(!empty($_POST)){
	$utype_name=$_POST['utype_name'];
	$utype_type=$_POST['utype_type'];
	$utype_auth=$_POST['utype_auth'];

	try{
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
		$sql_s = "select * from func_utype where utype_name='$utype_name'";
		$obj_s=$db->query($sql_s);
		if($obj_s->num_rows>0){
			throw new Exception('Already Have User Type');
		}
		if(!$utype_name){
			throw new Exception('Please Input User Type Name!');
		}
		if(!$utype_type){
			throw new Exception('Please Select Function Type!');
		}		
		

		foreach($utype_type as $value){
			$sql_id="select * from func_ftype where ftype_id='$value'";
			$obj_name=$db->query($sql_id);
			if($obj_name->num_rows==0){
				throw new Exception('No have Function Type');
			}
		}
		$utype_type=implode(" ",$_POST['utype_type']);
		if(!empty($utype_auth)){
			$utype_auth=implode(" ",$_POST['utype_auth']);
		}
		
		function str($str,$db){
		return mysqli_real_escape_string($db,$str);
		}
		$name=str($utype_name,$db);
		$type=str($utype_type,$db);
		$auth=str($utype_auth,$db);
		
		$sql="insert into func_utype values('','$name','$auth','$type')";
	
		$obj=$db->query($sql);
	
		if($obj){
/*			echo "<script>";
			echo "alert('ok');";
			echo "location.href='main.php';";
			echo "</script>"; */
		}else{
/*			echo "<script>";
			echo "alert('error');";
			echo "history.go(-1);";
			echo "</script>"; */
		}
	}catch(Exception $e){
		echo $e->getMessage();
	}	
}	
	
?>