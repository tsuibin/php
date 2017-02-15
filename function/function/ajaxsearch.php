<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<script src="/function/include/javascript/ajax.js"></script>
<script>
//Uni Search Proess
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
function doo()
{
	str=document.getElementById('searchtext').value;

	//document.getElementById('aa').innerHTML=str;	
	//name=document.myform.username.value;//获取表单的值
	//if(name=="")
	//{

		http_request=loadajax("dosearch.php?key="+str);
	//}
	//else
	//{
	//http_request=loadajax(url);//使用ajax调用process.php
	//使用get方法发送数据 使用div id=msg来接收数据
	}
</script>
<body>
<div align='center'>
<form>
<input type="text" id='searchtext' oninput="doo();"  autocomplete='off' size="55" maxlength="2048" />
<!--<input type="submit" value="Uni Search" />-->
</form>
</div>
<!--<div id="aa" align='center'></div>-->

<div id="msg" align='center'></div>
</body>
</html>