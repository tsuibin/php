<!--
1��	��ȡ���ύ���ַ�������
2��	�ѱ��ύ���ַ���ȫ���ô�д��Сд��ʾ����
3��	ȥ�������ύ���ַ�����β�Ŀո�
4��	�ѱ��ύ���ַ���������ʾ����
-->

<form action="" method="get">
	�������ַ�����<input type="text" name="string">
	<input type="submit" value="�ύ"><br>
</form>

<?php 
	$str=$_GET[string];
	echo "�ַ������ȣ�".strlen($str)."<br>";
	echo "��д��".strtoupper($str)."<br>";
	echo "Сд��".strtolower($str)."<br>";
	echo "ȥ����β�ո�".trim($str)."<br>";
	echo "������ʾ��".strrev($str)."<br>";
?>