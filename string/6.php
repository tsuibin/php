<?php 
	//6.用php字符串函数去掉未知长度的字符串的最后两位
	
	function sub($str){
		echo "输入的字符串是：$str 去掉最后两位是：".substr($str,0,strlen($str)-2);
	}
	
	sub(abcd);
	
?>