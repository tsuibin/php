<!--
12���ѱ��ύ�������ַ������бȽϣ����ִ�Сд�Ͳ����ִ�Сд�Ƚϣ�������
13���ѱ��ύ�������ַ������бȽϣ�������Ƴ̶ȣ��ٷֱȣ�
-->

<form action="" method="get">
	��һ���ַ�����<input type="text" name="str1" /><br />
	�ڶ����ַ�����<input type="text" name="str2" /><br />
	<input type="submit" value="�ύ">
</form>

<?php 
	$str1=$_REQUEST[str1];
	$str2=$_REQUEST[str2];
	
	echo "���ִ�Сд�ȽϽ����".strcmp($str1,$str2)."<br>";
	echo "�����ִ�Сд�ȽϽ����".strcasecmp($str1,$str2)."<br>";
	
	similar_text($str1,$str2,$s);
	echo "���Ƴ̶�$s %";
?>