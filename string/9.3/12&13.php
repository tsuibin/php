<!--
12．把表单提交的两个字符串进行比较，区分大小写和不区分大小写比较，输出结果
13．把表单提交的两个字符串进行比较，输出相似程度（百分比）
-->

<form action="" method="get">
	第一个字符串：<input type="text" name="str1" /><br />
	第二个字符串：<input type="text" name="str2" /><br />
	<input type="submit" value="提交">
</form>

<?php 
	$str1=$_REQUEST[str1];
	$str2=$_REQUEST[str2];
	
	echo "区分大小写比较结果：".strcmp($str1,$str2)."<br>";
	echo "不区分大小写比较结果：".strcasecmp($str1,$str2)."<br>";
	
	similar_text($str1,$str2,$s);
	echo "相似程度$s %";
?>