<?php 
	//6.��php�ַ�������ȥ��δ֪���ȵ��ַ����������λ
	
	function sub($str){
		echo "������ַ����ǣ�$str ȥ�������λ�ǣ�".substr($str,0,strlen($str)-2);
	}
	
	sub(abcd);
	
?>