<!--
14���ѱ�GET�ύ��url�е�����%BC%AA�������ַ����ֱ���н�����ʾ�����±�����ʾ��
-->

<form action="" method="get">
	���������ַ�����<input type="text" name="string" />
	<input type="submit" value="�ύ" />
</form>

<?php 
	$str=$_REQUEST[string];
	$str1=urldecode($str);
	$str2=urlencode($str1);
	echo "������ʾ��$str1 <br>���±�����ʾ��$str2";
?>