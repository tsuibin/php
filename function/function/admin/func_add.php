<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Function Add</title>
<style type="text/css">
<!--

-->
</style></head>
<?php
//接收表单提交数据
$func=$_GET['id'];
$db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$obj2=$db->query("select ftype_id,ftype_name from func_ftype");
while($row2=$obj2->FETCH_assoc()){
	$row3[]=$row2;
}
?>
<body>
  <div align="center">
  <form id="form1" name="form1" method="post" action="func_create.php">
<p align="left">函数名称
  <input type="hidden" name="func_id" value="<?php echo $row['func_id'];?>" />
  <input type="text" name="func_name" value="<?php echo $row['func_name'];?>"/><br /><br />
  函数类型
  <select name="func_ftype" >
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
  <br />
  <br />
  函数基本说明/注释/<br />
  <textarea name="func_breif"></textarea>  
<br />
  <br />
  函数原形/范例<br />
  <textarea name="func_origin"></textarea>
  <br /><br />
  返回类型:<br /> 
  <!--
  四种标量类型:(布尔型 整型 浮点型 字符串)<br />
  两种符合类型:(数组 对象)<br />
  两种特殊类型:资源 NULL<br />
  伪类型: mixed number callback<br />
  -->

  四种标量类型:(布尔型 整型 浮点型 字符串)<br />
  布尔型<input type="checkbox" name="func_return[]" value="1" />
  整型<input type="checkbox" name="func_return[]" value="2" />
  浮点型<input type="checkbox" name="func_return[]" value="3" />
  字符串<input type="checkbox" name="func_return[]" value="4" /><br />
  两种符合类型:(数组 对象)<br />
  数组<input type="checkbox" name="func_return[]" value="5" />
  对象<input type="checkbox" name="func_return[]" value="6" /><br />
  两种特殊类型:资源 NULL<br />
  资源<input type="checkbox" name="func_return[]" value="7" />
  NULL<input type="checkbox" name="func_return[]" value="8" /><br />
  伪类型: mixed number callback<br />
  mixed<input type="checkbox" name="func_return[]" value="9" />
  number<input type="checkbox" name="func_return[]" value="10" />
  callback<input type="checkbox" name="func_return[]" value="11" /><br />
  <br />
  适用PHP版本:4,5,6<br />
  PHP3<input type="checkbox" name="func_ver[]" value="3"/>
  PHP4<input type="checkbox" name="func_ver[]" checked="checked" value="4"/>
  PHP5<input type="checkbox" name="func_ver[]" checked="checked" value="5"/>
  PHP6<input type="checkbox" name="func_ver[]" value="6"/>
  <br /><br />
  常用指数:<br />
  1<input type="radio" name="func_level[]" value="1"/>
  2<input type="radio" name="func_level[]" value="2"/>
  3<input type="radio" name="func_level[]" value="3"/>
  4<input type="radio" name="func_level[]" value="4"/>
  5<input type="radio" name="func_level[]" checked="checked" value="5"/><br /><br />
  详细说明<br />
  <textarea name="func_detail"><?php echo $row['func_detail'];?></textarea>
  <br /><br />
  相关函数<br />
  <textarea name="func_other"><?php echo $row['func_other'];?>
  </textarea>
  <br /><br />
  <input type="submit" name="Submit" value="发布" />

  </form>

  </div>
</body>
</html>
