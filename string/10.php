<!--
10���ñ��ύ������Ϣ���������˷�����ϢΪ�����Ǹ��ɶ���ˡ����Ƶ��ַ�������Ѹ���Ϣ�滻Ϊ�����Ǹ��ɰ����ˡ����
-->

<form action="" method="post">
	<textarea rows="10" cols="50" name="msg"></textarea><br>
	<input type="submit" value="����">
</form>

<?php 
	$msg=$_REQUEST[msg];
	if(similar_text("���Ǹ��ɶ����",$msg)==14){
		$arr1=array("���Ǹ��ɶ����");
		$arr2=array("���Ǹ��ɰ�����");
		echo str_replace($arr1,$arr2,$msg);
	}
?>