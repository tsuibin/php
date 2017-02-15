<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>input</title>
<style type="text/css">
<!--

-->
</style></head>
<?php

//接收表单提交数据
	if(!empty($_GET['id'])){
		$func=$_GET['id'];
		$db=new Mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");
		$obj=$db->query("select * from func_parameter where parameter_id=$func");
		$row=$obj->fetch_assoc();
		$obj2=$db->query("select func_id,func_name from func_function");
		while($row2=$obj2->FETCH_assoc()){
			$row3[]=$row2;
	
		}
	}
?>
<body>
  <div align="center">
  <form id="form1" name="form1" method="post" action="parameter_update.php">
<p align="left">参数名称
  <input type="hidden" name="parameter_id" value="<?php echo $row['parameter_id'];?>" />
  <input type="text" name="parameter_name" value="<?php echo $row['type_parameter_name'];?>"/><br /><br />
  所属函数
  <select name="func_id" >
<?php
	foreach($row3 as $value){
		if($row['func_id']==$value['func_id']){
			$select="selected=\"selected\"";
		}else{
			$select="";
		}
		echo $row['func_id'];
		echo "<option value={$value['func_id']} $select>{$value['func_name']}</option>";
  	}
?>
  </select>
  <br />
  <br />
  参数实例<br />
  <textarea name="type_code_name" cols="60" rows="20"><?php echo stripslashes($row['type_code_name']);?></textarea>  
<br />
  <br />
  <input type="submit" name="Submit" value="更新" />

  </form>

  </div>
</body>
</html>
