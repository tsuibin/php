<?php 
	//11�������<a href=��a.php��>����</a>�����ַ�����ҳ����ʾ�����������Ǳ��һ������
	
	$str=<<<a
		<a href>="a.php">����</a>
a;
	echo htmlspecialchars($str);
?>