// JavaScript Document
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
