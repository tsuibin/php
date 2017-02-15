<!--
10．用表单提交聊天信息，假如有人发送消息为“你是个可恶的人”类似的字符串，则把该信息替换为“你是个可爱的人”输出
-->

<form action="" method="post">
	<textarea rows="10" cols="50" name="msg"></textarea><br>
	<input type="submit" value="发送">
</form>

<?php 
	$msg=$_REQUEST[msg];
	if(similar_text("你是个可恶的人",$msg)==14){
		$arr1=array("你是个可恶的人");
		$arr2=array("你是个可爱的人");
		echo str_replace($arr1,$arr2,$msg);
	}
?>