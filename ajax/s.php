<script>
if(window.ActiveXObject && !window.XMLHttpRequest)
{
	 window.XMLHttpRequest=function()
	{                   
		return new ActiveXObject((navigator.userAgent.toLowerCase().indexOf('msie 6') != -1) ? 'Microsoft.XMLHTTP' : 'Msxml2.XMLHTTP');               
	}
} //取得XMLHttpRequest对象              
else if(window.XMLHttpRequest)
{
	http_request=new XMLHttpRequest();
}

var req=false;          
var flagSelect;
function testName(flag,value)
{ //使用Ajax访问服务器            
	alert("asdas");
	flagSelect=flag; //标记一下当前是选择省,还是选择市            
	http_request=new XMLHttpRequest();            
	if(http_request)
	{               
		alert("bbb");
		http_request.onreadystatechange=setValue;            
	}
	alert("ccc");       
	http_request.open('POST',"sd.php",true);//把参数带到服务器中 
	alert("open");    
	http_request.setRequestHeader("If-Modified-Since","0");                     
	//http_request.SetRequestHeader("Content-Type","text/xml; charset=utf8");
	alert("header");
	//http_request.open("GET",url,true);                
	http_request.send(null);
	alert("send");
}            
function setValue()
{                          
	if (http_request.readyState==4)
		{ //访问到服务器                                       
			if(http_request.status==200)
			{  //正确返回                      //alert("3");                          
				if(flagSelect=="1")
				{ //如果选择某个省要更新市和区                                                     
					var v=http_request.responseText;//req.responseText是服务器返回来的字符串 
					//alert(v);
					document.getElementById("main").innerHTML=v;                                                      paint(document.all("second"),v);//更新市下拉框                         
				}                       
			}              
		}           
}            

function paint(obj,value)
{ //根据一对数据去更新一个下拉框                
var ops = obj.options;    
var oo = document.createElement("OPTION");    
oo.value="0";    
oo.text="  --请选择--  ";                    
var v=value.split(";");//得到一些数据,(修改过了..)                    
while(ops.length>0){ //先清空原来的数据                      
ops.remove(0);                    
}    
ops.add(oo);                   
for(var i=0;i<v.length-1;i++){  //把新得到的数据显示上去                        
var o = document.createElement("OPTION");//创建一个option把它加到下拉框中                        o.value=v[i].split(",")[0];                        
o.text=v[i].split(",")[1];                        
ops.add(o);                  
}                
}

paint(obj,value);
</script>

<body>
<form action="sd.php" method="post">
<select name="first" onchange="testName(1,this.value);">
	<option>aaaaaaa</option>
	<option>vvvvvvvv</option>
</select>
<input type="submit" >
</form>
<div id="main"></div>

<select name="second" onchange="testName(1,this.value);">
	<option>bbbbbbbbbbb</option>
	<option>aaaaaaa</option>
</select>

</body>

<?php
//	function this(){
//		echo "this is hello";
//	}
//	$hello="bbbbb";
//	echo $hello;
?>

<!--PrintWriter out = response.getWriter();

 StringBuffer str = "aa,bb"; 

out.print(str); 

out.flush(); 

out.close(); 

然后页面接收一下  -->