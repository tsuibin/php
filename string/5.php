<?php 
	//5.格式化输出
	
	//a)	字符串输出长度为20，长度不够在前面补充@
	function showa($str){
	echo sprintf("%'@20s",$str)."<br>";
	}
	showa("abcd");
		
	//b)	小数输出长度为10，小数位占5，长度不够在前面补充#
	function showb($f){
		echo sprintf("%'#10.5f",$f)."<br>";
	}
	showb(0.123456789);
	
	//c)	分别输出整数10的二进制、八进制、十六进制形式
	function showc($i){
		echo sprintf("10的二进制：%b,八进制：%o,十六进制：%x",$i,$i,$i)."<br>";
	}
	showc(10);
	
	//d)	输出a的ASCII码
	function showd($str){
		echo sprintf("%s的ASCII码：%c",$str,$str)."<br>";
	}
	showd("a");
	
	//e)	输出ASCII码98的字符
	
	function showe($i){
		echo sprintf("ASCII码%d的字符：%c",$i,$i)."<br>";
	}
	showe(98);

?>