<!--
15���ѱ��ύ���ַ����е�һЩ�����ַ���. \ + * ? [ ] ^ �� �� $����ǰ��ӡ�\������ת�����
-->

<form action="" method="get">
	�����ַ�����<input type="text" name="string">
	<input type="submit" value="�ύ">
</form>

<?php 
	$str=$_REQUEST[string];
	$arr1=array('.','+','*','?','[',']','^','$');
	$arr2=array('\.','\+','\*','\?','\[','\]','\^','\$');
	
	echo str_replace($arr1,$arr2,$str);

?>