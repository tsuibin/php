<!--
7���ѱ��ύ�Ķ���ַ�����@��������
-->

<form action="" method="get">
	��һ���ַ�����<input type="text" name="str1"><br>
	�ڶ����ַ�����<input type="text" name="str2"><br>
	�������ַ�����<input type="text" name="str3"><br>
	���ĸ��ַ�����<input type="text" name="str4"><br>
	<input type="submit" value="�ύ"><br>
</form>

<?php 
		$str1=$_GET[str1];
		$str2=$_GET[str2];
		$str3=$_GET[str3];
		$str4=$_GET[str4];
		
		$arr=array($str1,$str2,$str3,$str4);
		$str=implode("@",$arr);
		
		echo $str;
		
?>