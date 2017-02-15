<!--
16．假设表单提交的为上传文件名，提取上传文件的扩展名，在前面分别加一个日期（20080118020532）和1000000到9999999之间的随机整数组合的文件名，最后显示出来。
-->

<form action="" method="get">
	<input type="text" name="filename">
	<input type="submit" value="提交">
</form>

<?php 
	$name=$_REQUEST[filename];
	$time=date(YmdHis);
	$num=rand(1000000,9999999);
	
	echo "拓展名是：".substr($name,strpos($name,".")+1)."<br>";
	echo "新文件名：$time$num".substr($name,strpos($name,"."))."<br>";
?>