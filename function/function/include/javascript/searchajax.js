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
	//name=document.myform.username.value;//��ȡ����ֵ
	//if(name=="")
	//{

		http_request=loadajax("dosearch.php?key="+str);
	//}
	//else
	//{
	//http_request=loadajax(url);//ʹ��ajax����process.php
	//ʹ��get������������ ʹ��div id=msg����������
	}
var http_request=false;
function loadajax(url){
	if(window.ActiveXObject){ //IE�����
		try{   //�쳣�������
			http_request=new ActiveXObject("Msxml2.XMLHTTP");
		}catch(exception){
			http_request=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}else if(window.XMLHttpRequest){  //��������
		http_request=new XMLHttpRequest();
	}
	if(http_request){
		http_request.onreadystatechange=process; //���ô�����
		http_request.open("GET",url,true);
		http_request.setRequestHeader("If-Modified-Since","0");//����Ҫ����������õ���������������
		http_request.send(null);
		return http_request;
	}else{
		return false;
	}
}