<?php 

	$arr=array("a2","a6","a67","a7");
	
	usort($arr,"strnatcmp");
	
	natsort($arr);//������Ȼ��������
	
	//natcasesort(); ���Դ�Сд

	/* $arr=array("one"=>3,6,1,5,9,4,43);
	
	function fun($a,$b){
		//echo "a=$a b=$b<br>";
		if($a>$b)
			return 1;
		if($a==$b)
			return 0;
		if($a<$b)
			return -1;
	}
	 */
	//ksort()�±�����  krsort()�±꽵��
	//uksort($arr,"fun");
	
	//asort() �����±�   arsort()
	//uasort($arr,"fun");
	
	//sort();����   rsort()  ����
	//usort($arr,"strnatcmp"); �Զ���
	
	print_r($arr);
?>