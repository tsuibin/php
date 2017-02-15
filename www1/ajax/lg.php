<?php
session_start();
header("Content_Type:text/html;charset=utf8");
?>
<script language="javascript" type="text/javascript" src="ajax.js"></script>
<script>
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			document.getElementById("login").innerHTML=t;
		}
	}
}

function check()
{
	var name=document.myform.username.value;
	var passwd=document.myform.pwd.value;
	http_request=loadajax("loging.php?u="+name+"&p="+passwd);
}
</script>
<div id="login">
<form action="loging.php" method="post" name="myform">
用户名:<input type="text" name="username" value="<?php echo $_SESSION['uname'];?>"/>
密码:<input type="password" name="pwd" value="<?php echo $_SESSION['upwd'];?>"/>
<input type="button" value="登陆" onclick="check()"/>
</form>
</div>
