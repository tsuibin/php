// JavaScript Document
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
