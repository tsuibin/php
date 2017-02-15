<?php


?>
1 隐藏表单域<br />
2 hidden name checkid value zyzk
<input type="hidden" name="check" value="abcd" />

3 url重写  ?id=1111
<a href="info.php?id=201&&action=del">url</a>
cookies
<?php 
	setcookie("name","value",time()+10000,"/");
	//time()当前时间 0浏览器的生命周期 time()+1000未来的失效时间
	//不写时间 相当于0  时间 减去一个数 表示立即失效
	$_COOKIE["name"];
	setcookie("arr[0]","al");
	$_COOKIE["arr"][0];
	setcookie("arr[one]","al");
	$_COOKIE["arr"]["one"];
	?>
4 session
<?php 
	//启动会话
	session_start();//针对每一个用户分配一个id号 保存在客户端的cookie中
	//注册变量
	//注册变量保存在服务器端
	$_SESSION["var1"]="v1";
	
	//调用变量 根据id到服务器上取数据
	echo $_SESSION["var1"];
	//有效期 关闭浏览器之前都有效 全部路径
	//用户身份的跟中 登录的状态，访问的信息的记录 个性化的设置
?>
session
