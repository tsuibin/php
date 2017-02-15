<!--
1．	获取表单提交的字符串长度
2．	把表单提交的字符串全部用大写和小写显示出来
3．	去除掉表单提交的字符串首尾的空格
4．	把表单提交的字符串逆序显示出来
-->

<form action="" method="get">
	请输入字符串：<input type="text" name="string">
	<input type="submit" value="提交"><br>
</form>

<?php 
	$str=$_GET[string];
	echo "字符串长度：".strlen($str)."<br>";
	echo "大写：".strtoupper($str)."<br>";
	echo "小写：".strtolower($str)."<br>";
	echo "去掉首尾空格：".trim($str)."<br>";
	echo "逆序显示：".strrev($str)."<br>";
?>