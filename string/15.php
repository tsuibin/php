<!--
15．把表单提交的字符串中的一些特殊字符（. \ + * ? [ ] ^ “ “ $）在前面加“\”进行转义输出
-->

<form action="" method="get">
	输入字符串：<input type="text" name="string">
	<input type="submit" value="提交">
</form>

<?php 
	$str=$_REQUEST[string];
	$arr1=array('.','+','*','?','[',']','^','$');
	$arr2=array('\.','\+','\*','\?','\[','\]','\^','\$');
	
	echo str_replace($arr1,$arr2,$str);

?>