<?php
//session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>用户注册</title>
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">



function checkinfo(form){
	if(form.username.value==""){
		alert("请输入用户名！");
		form.username.select();
		return false;
	}
	if(form.password.value==""){
		alert("请输入密码！");
		form.password.select();
		return false;
	}
	if(form.qrpsword.value==""){
		alert("请输入确认密码！");
		form.qrpsword.select();
		return false;
	}
	if(form.password.length<6){
		alert("密码长度不够！");
		form.password.select();
		return false;
	}
	if(form.password.value!=form.qrpsword.value){
		alert("两次输入密码不一致，重新输入！");
		form.password.select();
		return false;
	}
	if(form.email.value==""){
		alert("请输入Email地址!");
		form.email.select();
		return false;
	}
	if(form.email.value.indexOf('@')<=0){
		alert("请输入正确的Email地址！");
		form.email.select();
		return false;
	}

}


	function process(){
		if(http_request.readyState==4){
			if(http_request.status==200){
				t=http_request.responseText;
				document.getElementById("msg").innerHTML=t;
			}
		}
	}
	function check(){
		name=document.userinfo.username.value;
		if(name==""){
			alert("请输入用户名");
			//document.getElementById("cname").innerHTML="请输入用户名";
		}else{
			http_request=loadajax("chakanname.php?username="+name);
		}
	}
	function checkinfo(form){
	if(form.username.value==""){
		alert("请输入用户名！");
		form.username.select();
		return false;
	}
	if(form.password.value==""){
		alert("请输入密码！");
		form.password.select();
		return false;
	}
	if(form.qrpsword.value==""){
		alert("请输入确认密码！");
		form.qrpsword.select();
		return false;
	}
	if(form.password.length<6){
		alert("密码长度不够！");
		form.password.select();
		return false;
	}
	if(form.password.value!=form.qrpsword.value){
		alert("两次输入密码不一致，重新输入！");
		form.password.select();
		return false;
	}
	if(form.email.value==""){
		alert("请输入Email地址!");
		form.email.select();
		return false;
	}
	if(form.email.value.indexOf('@')<=0){
		alert("请输入正确的Email地址！");
		form.email.select();
		return false;
	}
/* 	if(from.ans.value==""){
		alert("请输入密码找回答案！");
		form.ans.select();
		return false;
	} */
}

</script>

</head>

<body>

<div id="register"></div>
<div class="reg">
	<div class="reg1" align="center">用户注册</div>
	<div class="reg2" align="center"><br />
		<table border="1" cellpadding="0" cellspacing="0" >
			<form action="zc1.php" method="post" name="userinfo" onSubmit="return checkinfo(this);">
			<tr height="50"><td width="90" >用户名：</td>
				<td align="left" width="450">&nbsp;<input type="text" name="username" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'" onblur="check()" />&nbsp;<span class="s1">*</span>&nbsp;&nbsp;<span id="msg"></span><span id="cname"></span></td>
		</tr>
		<tr height="50"><td>密&nbsp;码：</td>
			<td align="left" >&nbsp;<input type="password" name="password" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*密码长度大于6位</span></td>
		</tr>
		<tr height="50"><td>确认密码：</td>
			<td align="left">&nbsp;<input type="password" name="qrpsword" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span><div id="check"></div></td>
		</tr>
		<tr height="50"><td>性别：</td>
			<td align="left">&nbsp;
			  <input type="radio" name="sex" value="1" checked="checked" />
			&nbsp;男&nbsp;&nbsp;<input type="radio" name="sex" value="0" />
			&nbsp;女</td>
		</tr>
		<tr height="50"><td>Email:</td>
			<td align="left">&nbsp;<input type="text" name="email" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
		<tr height="50"><td>联系电话：</td>
			<td align="left">&nbsp;<input type="text" name="tel" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/><span class="s1">*</span></td>
		</tr>
		<tr height="50"><td>MSN或QQ：</td>
			<td align="left">&nbsp;<input type="text" name="qq" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
	

		<tr height="50"><td colspan="2" align="center"><input class="but" type="submit" value="提交"  />	&nbsp;	  <input class="but" type="reset" value="重填"  /><span class="s1">*</span></td>
		</tr>
		</form>
	</table>
	<span class="s1">注意：带*为必填内容</span>
	</div>
</div>
</body>
</html>
