<?php 
	//8����alex0018@126.com�ַ����𿪱�Ϊ�����ַ������û����ͷ�������

	function get($mail){
		$lo=strpos($mail,"@");
		$user=substr($mail,0,$lo);
		$serv=substr($mail,$lo+1);
		echo "�û�����$user ,����������$serv";
	}
	get("alex0018@126.com");
?>