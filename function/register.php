<title>用户注册</title>
<link rel="stylesheet" type="text/css" href="include/css/css_babel.css">
<style type="text/css">
body, html { background: #000 no-repeat 50% 0; }
</style>
<link rel="stylesheet" type="text/css" href="include/css/css_extra.css">
<link rel="stylesheet" type="text/css" href="include/css/css_zen.css">
<link rel="stylesheet" type="text/css" href="include/css/lightbox.css" media="screen">
<body style="background-color: #333333">

<script type="text/javascript" src="include/javascript/ajax.js"></script>
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
			http_request=loadajax("check.php?username="+name);
		}
	}
/*	function tijiao(){
		
			document.write("注册成功");
		
		alert("确定返回")
	}*/
</script>

</head>

<body>
<div class="silver" align="center">用户注册</div>
<div class="reg2" align="center">
<br />
		<table border="1" cellpadding="0" cellspacing="0" >
			<form action="" method="post" name="userinfo" onSubmit="return checkinfo(this);">
			<tr height="50"><td width="90" >用户名：</td>
				<td align="left" width="450">&nbsp;<input type="text" name="username" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'" onChange="check()" />&nbsp;<span class="s1">*</span>&nbsp;&nbsp;<span id="msg"></span><span id="cname"></span></td>
		</tr>
		<tr height="50"><td>密&nbsp;码：</td>
			<td align="left" >&nbsp;<input type="password" name="password" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*密码长度大于6位</span></td>
		</tr>
		<tr height="50"><td>确认密码：</td>
			<td align="left">&nbsp;<input type="password" name="qrpsword" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span><div id="check"></div></td>
		</tr>
		<tr height="50"><td>性别：</td>
			<td align="left">&nbsp;<input type="radio" name="sex" value="0" checked="checked" />&nbsp;男&nbsp;&nbsp;<input type="radio" name="sex" value="1" />&nbsp;女</td>
		</tr>
		<tr height="50"><td>Email:</td>
			<td align="left">&nbsp;<input type="text" name="email" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
		<tr height="50"><td>联系电话：</td>
			<td align="left">&nbsp;<input type="text" name="tel" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/></td>
		</tr>
		<tr height="50"><td>MSN或QQ：</td>
			<td align="left">&nbsp;<input type="text" name="tel" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
	

		<tr height="50"><td colspan="2" align="center"><input class="but" type="submit" value="提交"  />	&nbsp;	  <input class="but" type="reset" value="重填"  /></td>
		</tr>
		</form>
	</table>
	<span class="map">注意：带*为必填内容</span>
	</div>
</div>

