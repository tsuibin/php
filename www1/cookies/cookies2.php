<?php
	setcookie("username","alex",time()+10000000,'/');//第一个是名字 第二个是值 //必须放在所有输出的最前面
	//不能有任何正文 cookies响应头信息 第三个是有效期
	//第四个是有效的域 文件夹
	
	print_r($_COOKIE); //提取cookie信息
	echo $_COOKIE['username']; //取信息
	//先请求的 在响应响应的时候存 cookie是请求的时候取
	
	//有效作用域
?>