<!--
9．用表单提交昵称进入聊天室，从提交的昵称字符串中查找是否包含“捣蛋鬼”，如果包含则显示“禁止进入”和返回查找的位置。（用两种方法查找）
-->

<form action="" method="get">
	请输入用户名：<input type="text" name="name" />
	密码：<input type="password">
	<input type="submit" value="登录">
</form>

<?php 
	$name=$_GET[name];
	
	//第一种方法
	if(!strncmp($name,"捣蛋鬼",6)||strpos($name,"捣蛋鬼")){
		echo "第一种方法：<br>";
		echo "禁止进入<br>位置：".strpos($name,捣蛋鬼)."<br>";
	}
		
	//第二种方法
	if(similar_text("捣蛋鬼",$name)==6){
		echo "第二种方法：<br>";
		echo "禁止进入<br>位置：".strpos($name,捣蛋鬼)."<br>";
	}
	
?>