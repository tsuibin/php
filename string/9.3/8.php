<?php 
	//8．把alex0018@126.com字符串拆开变为两个字符串，用户名和服务器名

	function get($mail){
		$lo=strpos($mail,"@");
		$user=substr($mail,0,$lo);
		$serv=substr($mail,$lo+1);
		echo "用户名：$user ,服务器名：$serv";
	}
	get("alex0018@126.com");
?>