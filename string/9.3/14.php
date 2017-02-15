<!--
14．把表单GET提交在url中的类似%BC%AA的中文字符串分别进行解码显示和重新编码显示。
-->

<form action="" method="get">
	输入中文字符串：<input type="text" name="string" />
	<input type="submit" value="提交" />
</form>

<?php 
	$str=$_REQUEST[string];
	$str1=urldecode($str);
	$str2=urlencode($str1);
	echo "解码显示：$str1 <br>重新编码显示：$str2";
?>