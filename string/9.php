<!--
9���ñ��ύ�ǳƽ��������ң����ύ���ǳ��ַ����в����Ƿ�������������������������ʾ����ֹ���롱�ͷ��ز��ҵ�λ�á��������ַ������ң�
-->

<form action="" method="get">
	�������û�����<input type="text" name="name" />
	���룺<input type="password">
	<input type="submit" value="��¼">
</form>

<?php 
	$name=$_GET[name];
	
	//��һ�ַ���
	if(!strncmp($name,"������",6)||strpos($name,"������")){
		echo "��һ�ַ�����<br>";
		echo "��ֹ����<br>λ�ã�".strpos($name,������)."<br>";
	}
		
	//�ڶ��ַ���
	if(similar_text("������",$name)==6){
		echo "�ڶ��ַ�����<br>";
		echo "��ֹ����<br>λ�ã�".strpos($name,������)."<br>";
	}
	
?>