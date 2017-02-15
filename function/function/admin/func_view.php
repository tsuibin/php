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
		$obj=$db->query("select * from func_function where func_id=$func");
		$row=$obj->fetch_assoc();
		$obj2=$db->query("select ftype_id,ftype_name from func_ftype");
		while($row2=$obj2->FETCH_assoc()){
			$row3[]=$row2;
		}
	}
?>
<body>
	<div align="center">
		<form id="form1" name="form1" method="post" action="func_update.php">
		<p align="left">函数名称
  			<input type="hidden" name="func_id" value="<?php echo $row['func_id'];?>" />
			<input type="text" name="func_name" value="<?php echo $row['func_name'];?>"/><br /><br />
  <p align="left">函数类型<select name="func_ftype" >
<?php
	foreach($row3 as $value){

		if($row['ftype_id']==$value['ftype_id']){
			$select="selected=\"selected\"";
		}else{
			$select="";
		}
		echo $row['ftype_id'];
		echo "<option value={$value['ftype_id']} $select>{$value['ftype_name']}</option>";
	}
?>
  </select>
<br /><br />
  函数基本说明/注释/<br />
  <textarea name="func_breif"><?php echo $row['func_breif'];?></textarea>  
<br /><br />
  <br />
  函数原形/范例<br />
  <textarea name="func_origin"><?php echo $row['func_origin'];?></textarea>
<br /><br />
  返回类型:<br /> 
  <!--
  四种标量类型:(布尔型 整型 浮点型 字符串)<br />
  两种符合类型:(数组 对象)<br />
  两种特殊类型:资源 NULL<br />
  伪类型: mixed number callback<br />
  -->
<?php
	$check1;
	$check2;
	$check3;
	$check4;
	$check5;
	$check6;
	$check7;
	$check8;
	$check9;
	$check10;
	$check11;
	$row['func_return']=explode(" ",$row['func_return']);

	foreach($row['func_return'] as $value){
		switch($value){
			case 1:
				$check1="checked=\"checked\"";
				break;
			case 2:
  				$check2="checked=\"checked\"";
				break;
			case 3:
  				$check3="checked=\"checked\"";
				break;
			case 4:
  				$check4="checked=\"checked\"";
				break;
			case 5:
  				$check5="checked=\"checked\"";
				break;
			case 6:
  				$check6="checked=\"checked\"";
				break;
			case 7:
  				$check7="checked=\"checked\"";
				break;
  			case 8:
  				$check8="checked=\"checked\"";
				break;
  			case 9:
  				$check9="checked=\"checked\"";
				break;
  			case 10:
  				$check10="checked=\"checked\"";
				break;
  			case 11:
  				$check11="checked=\"checked\"";
				break;
		}
	} 
?>
四种标量类型:(布尔型 整型 浮点型 字符串)<br />
布尔型<input type="checkbox" name="func_return[]" value="1" <?php echo $check1;?> />
整型<input type="checkbox" name="func_return[]" value="2" <?php echo $check2;?> />
浮点型<input type="checkbox" name="func_return[]" value="3" <?php echo $check3;?> />
字符串<input type="checkbox" name="func_return[]" value="4" <?php echo $check4;?> /><br />
两种符合类型:(数组 对象)<br />
数组<input type="checkbox" name="func_return[]" value="5" <?php echo $check5;?> />
对象<input type="checkbox" name="func_return[]" value="6" <?php echo $check6;?> /><br />
两种特殊类型:资源 NULL<br />
资源<input type="checkbox" name="func_return[]" value="7" <?php echo $check7;?> />
NULL<input type="checkbox" name="func_return[]" value="8" <?php echo $check8;?> /><br />
伪类型: mixed number callback<br />
mixed<input type="checkbox" name="func_return[]" value="9" <?php echo $check9;?> />
number<input type="checkbox" name="func_return[]" value="10" <?php echo $check10;?> />
callback<input type="checkbox" name="func_return[]" value="11" <?php echo $check11;?> /><br /><br />
<br />
<?php
	$check1;
	$check2;
	$check3;
	$check4;
	$row['func_ver[]']=explode(" ",$row['func_ver[]']);
	foreach($row['func_ver[]'] as $value){
		switch($value){
			case 3:
				$check3="checked=\"checked\"";
				break;
			case 4:
				$check4="checked=\"checked\"";
				break;
			case 5:
				$check5="checked=\"checked\"";
				break;
			case 6:
				$check6="checked=\"checked\"";
				break;
			default:
				$check5="checked=\"checked\"";

		}
	}
?>
适用PHP版本:4,5,6<br />
PHP3<input type="checkbox" name="func_ver[]" <?php echo $check3;?> value="3"/>
PHP4<input type="checkbox" name="func_ver[]" <?php echo $check4;?> value="4"/>
PHP5<input type="checkbox" name="func_ver[]" <?php echo $check5;?> value="5"/>
PHP6<input type="checkbox" name="func_ver[]" <?php echo $check6;?> value="6"/>
<br /><br />
常用指数:<br />
<?php
	$check1;
	$check2;
	$check3;
	$check4;
	$check5;
	switch($row['func_level']){
		case 1:
			$check1="checked=\"checked\"";
  			break;
  		case 2:
  			$check2="checked=\"checked\"";
  			break;
  		case 3:
  			$check3="checked=\"checked\"";
  			break;
  		case 4:
  			$check4="checked=\"checked\"";
  			break;
  		case 5:
  			$check5="checked=\"checked\"";
  			break;
  		default:
  			$check5="checked=\"checked\"";
	}
  
?>
1<input type="radio" name="func_level[]" <?php echo $check1;?>  value="1"/>
2<input type="radio" name="func_level[]" <?php echo $check2;?>  value="2"/>
3<input type="radio" name="func_level[]" <?php echo $check3;?>  value="3"/>
4<input type="radio" name="func_level[]" <?php echo $check4;?>  value="4"/>
5<input type="radio" name="func_level[]" <?php echo $check5;?>  value="5"/><br /><br />
详细说明<br />
<textarea name="func_detail"><?php echo $row['func_detail'];?></textarea><br /><br />
相关函数<br />
<textarea name="func_other"><?php echo $row['func_other'];?>
</textarea>
<br /><br />
是否显示
  
	<input type="submit" name="Submit" value="更新" />

	</form>
		<form action="parameter_add.php" method="get">
	<input type="text" name="id" value="<?php echo $_GET['id']; ?>" />
	<input type="text" name="name" value="<?php echo $_GET['name']; ?>" />
	<input type="submit" />
	</form>
<?php

	$obj=$db->query("select parameter_id,type_parameter_name from func_parameter where func_id='$func'");
echo "<br /><br /><a href='parameter_add.php?func_id=$func'>添加参数</a>";
echo "<br /><br />目前已有参数";
	while($row=$obj->fetch_assoc()){
		echo "<br /><a href='parameter_view.php?id=".$row['parameter_id']."'>".$row['type_parameter_name']."</a>";
		
	}

?>
</div>
</body>
</html>

