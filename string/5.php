<?php 
	//5.��ʽ�����
	
	//a)	�ַ����������Ϊ20�����Ȳ�����ǰ�油��@
	function showa($str){
	echo sprintf("%'@20s",$str)."<br>";
	}
	showa("abcd");
		
	//b)	С���������Ϊ10��С��λռ5�����Ȳ�����ǰ�油��#
	function showb($f){
		echo sprintf("%'#10.5f",$f)."<br>";
	}
	showb(0.123456789);
	
	//c)	�ֱ��������10�Ķ����ơ��˽��ơ�ʮ��������ʽ
	function showc($i){
		echo sprintf("10�Ķ����ƣ�%b,�˽��ƣ�%o,ʮ�����ƣ�%x",$i,$i,$i)."<br>";
	}
	showc(10);
	
	//d)	���a��ASCII��
	function showd($str){
		echo sprintf("%s��ASCII�룺%c",$str,$str)."<br>";
	}
	showd("a");
	
	//e)	���ASCII��98���ַ�
	
	function showe($i){
		echo sprintf("ASCII��%d���ַ���%c",$i,$i)."<br>";
	}
	showe(98);

?>