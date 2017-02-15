<!--
17．把表单提交的登陆密码，用异或^的方式对密码字符串进行加密，显示加密结果，并进行解密还原显示。
-->

<form action="" method="get">
	用户名：<input type="text" />
	密码：<input type="password" name="pwd" />
	<input type="submit" value="登录" />
</form>

<?php 
	$pwd=$_REQUEST[pwd];
	$key="qinyuguang@gmail.comqinyuguang@gmail.com";
	$pwd1=$pwd^$key;
	$pwd2=$pwd1^$key;
	
	echo "$pwd<br>";
	echo "$pwd1<br>";
	echo "$pwd2<br>";
?>