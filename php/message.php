<?php 	
	echo "<a href='index.php'>点这里返回</a>";
	//表单变量 substr($str,0,20);
	$filename=$_FILES["upload"]["name"];	
	$type=$_FILES["upload"]["type"];
	$error=$_FILES["upload"]["error"];
	$filepath=$_FILES["upload"]["tmp_name"];
	$size=$_FILES["upload"]["size"];
	$name=$_REQUEST["name"];	
	$title=$_REQUEST["title"];	
	$message=$_REQUEST["message"];	
	date_default_timezone_set("Etc/GMT-8");
	$time =date("F j, Y, g:i a");
	//转换所有\斜杠
	$name2=str_replace("\\","",$name);
	$title2=str_replace("\\","",$title);
	$message2=str_replace("\\","",$message);
	//截取20位
	$sname=substr($name2,0,20);
	$stitle=substr($title2,0,40);
	$smessage=substr($message2,0,1000);
	
	//数据安全处理		
	$names=nl2br(htmlspecialchars("$sname",ENT_QUOTES));
	$titles=nl2br(htmlspecialchars("$stitle",ENT_QUOTES));
	$messages=htmlspecialchars("$smessage",ENT_QUOTES);

	
	if(empty($filename)){
	 $filename="debian.gif";
	 $type="image/gif";
	 

	if($type !="image/gif" ){
		echo "只允许上传gif图片"; 
	}else{
	//文件存储
	$f = fopen("message.txt","a+") or die("文件打开失败");
	fwrite($f,"<tr><td>姓名：</td><td>$names</td></tr> <tr><td>标题：</td><td>$titles</td></tr><tr><td>内容：</td><td style='word-wrap:break-word;word-break:break-all;'>$messages</td></tr><tr><td>时间：</td><td>$time</td></tr><tr><td>图片：</td><td><img src='./upload/$filename'></td></tr><br>\r\n",5000);// 文件，写入的内容，写入的长度
	fclose($f);
	//获取图片地址
	
	//文件上传
	switch($error)
	{
		case 0:
			if(is_uploaded_file($filepath))
			{
				move_uploaded_file($filepath,"./upload/".$filename);
				echo "留言成功!您上传的文件是：".$type;
				echo "文件大小是：".$size."byte <a href='show.php'>点这里返回</a>";
			}else{
				echo "没有找到上传文件";
			}
		break;
		case 1:
			echo "上传失败，超过文件上传设置大小2M";
		break;
		case 2:
			echo "部分文件上传";
		break;
		case 3;
			echo "没有文件被上传";
		break;
	}
	}
	}else{
	if($type !="image/gif" )
	{
		echo "只允许上传gif图片"; 
	}else{
	//文件存储
	$f = fopen("message.txt","a+") or die("文件打开失败");
	fwrite($f,"<tr><td>姓名：</td><td>$names</td></tr> <tr><td>标题：</td><td>$titles</td></tr><tr><td>内容：</td><td style='word-wrap:break-word;word-break:break-all;'>$messages</td></tr><tr><td>时间：</td><td>$time</td></tr><tr><td>图片：</td><td><img src='./upload/$filename'></td></tr><br>\r\n",5000);// 文件，写入的内容，写入的长度
	fclose($f);
	//获取图片地址
	
	//文件上传
	switch($error){
		case 0:
			if(is_uploaded_file($filepath)){
				move_uploaded_file($filepath,"./upload/".$filename);
				echo "留言成功!您上传的文件是：".$type;
				echo "文件大小是：".$size."byte <a href='show.php'>点这里返回</a>";
			}else{
				echo "没有找到上传文件";
			}
		break;
		case 1:
			echo "上传失败，超过文件上传设置大小2M";
		break;
		case 2:
			echo "部分文件上传";
		break;
		case 3;
			echo "没有文件被上传";
		break;
	}
	}
	}
	?>