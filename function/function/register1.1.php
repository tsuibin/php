<title>�û�ע��</title>
<script type="text/javascript" src="ajax.js"></script>
<script language="javascript" type="text/javascript">



function checkinfo(form){
	if(form.username.value==""){
		alert("�������û�����");
		form.username.select();
		return false;
	}
	if(form.password.value==""){
		alert("���������룡");
		form.password.select();
		return false;
	}
	if(form.qrpsword.value==""){
		alert("������ȷ�����룡");
		form.qrpsword.select();
		return false;
	}
	if(form.password.length<6){
		alert("���볤�Ȳ�����");
		form.password.select();
		return false;
	}
	if(form.password.value!=form.qrpsword.value){
		alert("�����������벻һ�£��������룡");
		form.password.select();
		return false;
	}
	if(form.email.value==""){
		alert("������Email��ַ!");
		form.email.select();
		return false;
	}
	if(form.email.value.indexOf('@')<=0){
		alert("��������ȷ��Email��ַ��");
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
			alert("�������û���");
			//document.getElementById("cname").innerHTML="�������û���";
		}else{
			http_request=loadajax("chakanname.php?username="+name);
		}
	}
/*	function tijiao(){
		
			document.write("ע��ɹ�");
		
		alert("ȷ������")
	}*/
</script>

</head>

<body>

<div id="register"></div>
<div class="reg">
	<div class="reg1" align="center">�û�ע��</div>
	<div class="reg2" align="center"><br />
		<table border="1" cellpadding="0" cellspacing="0" >
			<form action="" method="post" name="userinfo" onSubmit="return checkinfo(this);">
			<tr height="50"><td width="90" >�û�����</td>
				<td align="left" width="450">&nbsp;<input type="text" name="username" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'" onchange="check()" />&nbsp;<span class="s1">*</span>&nbsp;&nbsp;<span id="msg"></span><span id="cname"></span></td>
		</tr>
		<tr height="50"><td>��&nbsp;�룺</td>
			<td align="left" >&nbsp;<input type="password" name="password" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*���볤�ȴ���6λ</span></td>
		</tr>
		<tr height="50"><td>ȷ�����룺</td>
			<td align="left">&nbsp;<input type="password" name="qrpsword" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span><div id="check"></div></td>
		</tr>
		<tr height="50"><td>�Ա�</td>
			<td align="left">&nbsp;<input type="radio" name="sex" value="0" checked="checked" />&nbsp;��&nbsp;&nbsp;<input type="radio" name="sex" value="1" />&nbsp;Ů</td>
		</tr>
		<tr height="50"><td>Email:</td>
			<td align="left">&nbsp;<input type="text" name="email" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
		<tr height="50"><td>��ϵ�绰��</td>
			<td align="left">&nbsp;<input type="text" name="tel" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/></td>
		</tr>
		<tr height="50"><td>MSN��QQ��</td>
			<td align="left">&nbsp;<input type="text" name="tel" class="in" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#fdfdfd'"/>&nbsp;<span class="s1">*</span></td>
		</tr>
	

		<tr height="50"><td colspan="2" align="center"><input class="but" type="submit" value="�ύ"  />	&nbsp;	  <input class="but" type="reset" value="����"  /></td>
		</tr>
		</form>
	</table>
	<span class="s1">ע�⣺��*Ϊ��������</span>
	</div>
</div>
</body>
</html>
