var http_request=false;
function loadajax(url)
{
	if(window.ActiveXObject)
	{
			//alert("IE");
		try //如果这个错了，转跳到catch
		{
			http_request=new ActiveXObject("Msxml2.XMLHTTP");//严格区分大小写
		}
		catch(exception); //异常捕获机制
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
		http_request.open("GET",url,true);//后面是标志位true，等一等再往下执行
		//true服务器把数据给我了 我再进行下一步操作, 火狐有效
		http_request.setRequestHeader("If-Modified-Since","0");//IE有缓存
		//内容有缓存的话 不会自动更新 克服必须关闭浏览器重新再读，才能看到新数据
		//http_request.setRequestHeader();//设置请求头,必须在open后send之前写
		//设置为post app..
		http_request.send(null);//发送请求get可以不写
		//设置为post send(name=value&title=bbbb$);
		return http_request;
	}
	else
	{
		return false;
		//alert("初始化失败");
		//var http_request=false;
	}
}