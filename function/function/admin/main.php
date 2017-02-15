<?php	
	header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="../include/javascript/ajax.js"></script>
<script>
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			//alert(t);
			document.getElementById("msg").innerHTML=t;
		}
	}
}
function check(url)
{
	//name=document.myform.username.value;//获取表单的值
	//if(name=="")
	//{
		//alert("请输入用户名");
	//	http_request=loadajax("process.php?username="+name);
	//}
	//else
	//{
		//alert(url);
	http_request=loadajax(url);//使用ajax调用process.php
	//使用get方法发送数据 使用div id=msg来接收数据
	}
</script>

<b onmouseover="check('func_add.php');">添加函数</b> |
<b onmouseover="check('func_list.php');">管理函数</b> |
<b onmouseover="check('parameter_add.php');">添加参数</b> |
<b onmouseover="check('parameter_list.php');">管理参数</b> | 
<b onmouseover="check('type_add.php');">添加类型</b> | 
<b onmouseover="check('type_del.php');">管理类型</b> | 
<b onmouseover="check('utype_add.php');">添加用户组</b> | 
<b onmouseover="check('utype_list.php');">管理用户组</b> | 
<div id="msg"></div>