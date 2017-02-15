<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>input</title>
<style type="text/css">
<!--
body {
	background-color: #666666;
}
input{
height:20px;}
textarea{
height:100px;
width:300px;}
-->
</style></head>
<?php
//接收表单提交数据
$func=$_POST;

/* print_r($func);
var_dump($func['func']['name']);
echo $func['func']['ftype'];
echo $func['func']['breif'];
echo $func['func']['origin'];
echo $func['func']['return'];
echo $func['func']['ver'];
echo $func['func']['level'];
echo $func['func']['detail'];
echo $func['func']['other']; */

if (!empty($func['func']['name']) && !empty($func['func']['ftype']) && !empty($func['func']['breif']) && !empty($func['func']['origin']) && !empty($func['func']['return']) && !empty($func['func']['ver']) && !empty($func['func']['level']) && !empty($func['func']['detail']) && !empty($func['func']['other'])){
	//赋值操作
	$ftype_id=$func['func']['ftype'];
	$func_name=$func['func']['name'];
	$func_breif=$func['func']['breif'];
	$func_origin=$func['func']['origin'];
	$func_return=$func['func']['return'];
	$func_ver=$func['func']['ver'];
	$func_level=$func['func']['detail'];
	$func_other=$func['func']['other'];
	
	//自动加载数据库
	function __autoload($classname){
    	include_once "../include/class/{$classname}_class.php";
	}
	//创建数据库对象
	$db=new Database();
	//调用数据库方法
	$state=$db->inputfunction($ftype_id,$func_name,$func_breif,$func_origin, $func_return,$func_ver,$func_level,$func_detail,$func_other);
	if($state){
		echo "提交成功"; 
		}else{
			echo "提交失败";
			}
	
	
	
	
	}
?>
<body>


  <div align="center">
  <form id="form1" name="form1" method="post" action="input.php">
<p align="left">函数名称
  <input type="text" name="func[name]" /><br />
  函数类型
  <input name="func[ftype]" type="text" />
  <br />
  函数基本说明/注释/<br />
  <textarea name="func[breif]" type="text" ></textarea>  
<br />
  <br />
  函数原形/范例<br />
  <textarea name="func[origin]" type="text" ></textarea>
  <br />
  返回类型:<br /> 
  四种标量类型:(布尔型 整型 浮点型 字符串)<br />
  两种符合类型:(数组 对象)<br />
  两种特殊类型:资源 NULL<br />
  伪类型: mixed number callback
  <br />
  <input name="func[return]" type="text" />
  <br />
  适用PHP版本:4,5,6<br />
  <input name="func[ver]" type="text" />
  <br />
  常用指数:1 2 3 4 5 <br />
  详细说明<br />
  <textarea name="func[level]" type="text" /></textarea>
  <br />
  相关函数<br />
  <textarea name="func[detail]" type="text" />
  </textarea>
  <br />
   其他<br />
  <textarea name="func[other]" type="text" />
  </textarea>
  <br /><br />
  <input type="submit" name="Submit" value="发布" />

  </form>

  </div>

<p><br />
  <br />
  <br />
</p>
<p>&nbsp; </p>
</body>
</html>
