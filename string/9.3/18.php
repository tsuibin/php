<!--
18���ѱ��ύ���ַ��������ַ���д��ʾ���ٰ��ַ���ÿ���������ַ���д��ʾ��˼��������λ�õ��ַ���дת����
-->

<form action="" method="get">
	<textarea rows="10" cols="50" name="text"></textarea><br>
	<input type="submit" value="�ύ">
</form>

<?php 
	$str=$_REQUEST[text];
	$str1=ucfirst($str);
	$str2=ucwords($str);
	
	echo "�ַ������ִ�д��<br>$str1<br>";
	echo "�������ִ�д��<br>$str2<br>";
?>