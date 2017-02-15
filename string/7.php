<!--
7．把表单提交的多个字符串用@连接起来
-->

<form action="" method="get">
	第一个字符串：<input type="text" name="str1"><br>
	第二个字符串：<input type="text" name="str2"><br>
	第三个字符串：<input type="text" name="str3"><br>
	第四个字符串：<input type="text" name="str4"><br>
	<input type="submit" value="提交"><br>
</form>

<?php 
		$str1=$_GET[str1];
		$str2=$_GET[str2];
		$str3=$_GET[str3];
		$str4=$_GET[str4];
		
		$arr=array($str1,$str2,$str3,$str4);
		$str=implode("@",$arr);
		
		echo $str;
		
?>