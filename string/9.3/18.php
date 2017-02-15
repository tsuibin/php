<!--
18．把表单提交的字符串的首字符大写显示，再把字符串每个单词首字符大写显示，思考把任意位置的字符大写转换。
-->

<form action="" method="get">
	<textarea rows="10" cols="50" name="text"></textarea><br>
	<input type="submit" value="提交">
</form>

<?php 
	$str=$_REQUEST[text];
	$str1=ucfirst($str);
	$str2=ucwords($str);
	
	echo "字符串首字大写：<br>$str1<br>";
	echo "单词首字大写：<br>$str2<br>";
?>