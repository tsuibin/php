<script>
	var http_request=false;
	if(window.ActiveXObject)
	{
			//alert("IE");
		try //如果这个错了，转跳到catch
		{
			http_request=new ActiveXObject("Msxml2.XMLHTTP");//严格区分大小写
		}
		catch(exception) //异常捕获机制
		{
			http_request=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	else if(window.XMLHttpRequest)
	{
		//alert("火狐初始化");
		http_request=new XMLHttpRequest();
	}
	
	if(http_request)
	{
		//alert("ajax初始化成功");
		http_request.onreadystatechange=process;
		http_request.open("GET","page1.php",true);//后面是标志位true，等一等再往下执行
		http_request.setRequestHeader("If-Modified-Since","0");//IE有缓存
		//内容有缓存的话 不会自动更新 克服必须关闭浏览器重新再读，才能看到新数据
		//http_request.setRequestHeader();//设置请求头,必须在open后send之前写
		http_request.send(null);//发送请求get可以不写
	}
	else
	{
		alert("初始化失败");
	}
	//这段代码 创建了http_request对象!

	function process()
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
</script>

<!--
abort()终止
getAllResponseHeaders()获取所有的
getResponseHeader()获取某一个响应头信息
open("method求情方式","URL链接地址"[,asyncFlag是否使用异步，取消的话数据立即获取使用bool类型[,"username"],["passwd"]]])
9种求情方法

send()如果是get可以不写
post写 写法与地址栏相同
setRequestHeader()
客户发给服务器的内容

发送之后 服务器会返回报头集,可以用getResponseHeader() 获取
里面的内容有 日期
服务器平台apache
php版本
内容长度
最后修改
超时时间 时间
内容保持
mime类型

onreadyststechange 在发送之后 由这个来设置
http_request.readyState==4
5
4
3
2
1

200成功
204
404 没找到
500 遇到问题 页面有错误
503 负载过大
-->
<?php

?>