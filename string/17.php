<!--
17���ѱ��ύ�ĵ�½���룬�����^�ķ�ʽ�������ַ������м��ܣ���ʾ���ܽ���������н��ܻ�ԭ��ʾ��
-->

<form action="" method="get">
	�û�����<input type="text" />
	���룺<input type="password" name="pwd" />
	<input type="submit" value="��¼" />
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