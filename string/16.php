<!--
16��������ύ��Ϊ�ϴ��ļ�������ȡ�ϴ��ļ�����չ������ǰ��ֱ��һ�����ڣ�20080118020532����1000000��9999999֮������������ϵ��ļ����������ʾ������
-->

<form action="" method="get">
	<input type="text" name="filename">
	<input type="submit" value="�ύ">
</form>

<?php 
	$name=$_REQUEST[filename];
	$time=date(YmdHis);
	$num=rand(1000000,9999999);
	
	echo "��չ���ǣ�".substr($name,strpos($name,".")+1)."<br>";
	echo "���ļ�����$time$num".substr($name,strpos($name,"."))."<br>";
?>