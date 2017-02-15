// JavaScript Document
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
function   doo()   
{   
      dosearch();   
}
var ds = 0;
function Clear()   
{   
    if(ds)     
    {   
        clearTimeout(ds);     
        ds=0;   
    }   
}
function dosearch()
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
var http_request=false;
function loadajax(url){
	if(window.ActiveXObject){ //IE浏览器
		try{   //异常捕获机制
			http_request=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(exception){
			http_request=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}else if(window.XMLHttpRequest){  //火狐浏览器
		http_request=new XMLHttpRequest();
	}
	if(http_request){
		http_request.onreadystatechange=process; //调用处理函数
		http_request.open("GET",url,true);
		http_request.setRequestHeader("If-Modified-Since","0");//不需要关浏览器，得到服务器的新数据
		http_request.send(null);
		return http_request;
	}else{
		return false;
	}
}