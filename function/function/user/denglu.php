<?php 
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>无标题文档</title>
</head>

<body>
<form action="denglu1.php" method="post" name="myform">
用户名：<input type="text" name="name" value="请输入用户名" />
密码：<input type="password" name="password" value="" />
<input type="submit" value="提交" />
<a href="#" onclick="window.location.replace('zc.php')">注册</a>

</form>



</body>
</html>
