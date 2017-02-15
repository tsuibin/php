<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parameter Add</title>
</head>
<?php

$db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$obj2=$db->query("select func_id,func_name from func_function limit 30");
while($row2=$obj2->FETCH_assoc()){
	$row3[]=$row2;
}
?>
<body>
  <div align="center">
  <form id="form1" name="form1" method="post" action="parameter_create.php">
<p align="left">参数名称

  <input type="text" name="type_parameter_name" value=""/><br /><br />
  所属函数
  <select name="func_id" >
  <?php
  if($_GET['func_id']){
  foreach($row3 as $value){

  		if($_GET['func_id']==$value['func_id']){
  			$select="selected=\"selected\"";
  		}else{
  			$select="";
  		}
  		echo $row['func_id'];
  		echo "<option value={$value['func_id']} $select>{$value['func_name']}</option>";
  	}	
  }else{
  foreach($row3 as $value){

  		if($row['func_id']==$value['func_id']){
  			$select="selected=\"selected\"";
  		}else{
  			$select="";
  		}
  		echo $row['func_id'];
  		echo "<option value={$value['func_id']} $select>{$value['func_name']}</option>";
  	}
  	
  }
  
  

  ?>
  </select>
  <br />
  <br />
  参数实例<br />
  <textarea name="type_code_name" cols="60" rows="20"></textarea>  
<br />
  <br />
  <input type="submit" name="Submit" value="发布" />

  </form>

  </div>
</body>
</html>
