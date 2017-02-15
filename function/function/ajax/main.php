<?php
header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>
<script>
	//http_request=loadajax("page1.php");//初始化成功
	function addpage(page)
	{
		http_request=loadajax(page);
	}
	function process()
	{
		if(http_request.readyState==4)
		{
			if(http_request.status==200)
			{
				t=http_request.responseText;
				//alert(t);
				document.getElementById("main").innerHTML=t;
			}
		}
	}
	
	/*function process()
	{
		if(http_request.readyState==4)//对象有5种状态 ==4的时候就是完成了
		{
			if(http_request.status==200) //响应成功
			{
				t=http_request.responseText;//接收数据 普通文本
				//alert("函数处理");
				//解决中文字符集乱码问题
				//header("Content_Type:text/html;charset=utf8");
				alert(t);
			}

		}
	}
	*/
</script>
<bory>
<center>
<!-- 屏蔽所有的传统链接  -->

<a href="#" onclick="addpage('page1.php');" >page1</a> |
<a href="#" onclick="addpage('page2.php');" >page2</a> |
<a href="#" onclick="addpage('page3.php');" >page3</a>
<hr>
<div id="main"></div>
</center>
</body>
