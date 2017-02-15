<?php	
	header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>
<script>
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			document.getElementById("msg").innerHTML=t;
		}
	}
}
function check()
{
	name=document.myform.username.value;//获取表单的值
	if(name=="")
	{
		//alert("请输入用户名");
		http_request=loadajax("process.php?username="+name);
	}
	else
	{
		//alert("aa");
	http_request=loadajax("process.php?username="+name);//使用ajax调用process.php
	//使用get方法发送数据 使用div id=msg来接收数据
	}
}
</script>

<form action="process.php" method="post" name="myform">

用户名: <input type="text" name="username" onchange="check();"/>
<!--<input type="button" value="验证" onclick="check();" />-->

<div id="msg"></div>

<br />

<input type="submit" value="注册" />


</form>