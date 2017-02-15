<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">


<title>M</title>
</head>
<body>
<?php
//接收文本内容
$message['title'] = $_REQUEST['title'];
$message['name'] = $_REQUEST['name'];
$message['msg'] = $_REQUEST['msg'];

//获取时间
$message['time'] = time();

//接收上传文件
$file['name'] = $_FILES['file']['name'];
$file['type'] = $_FILES['file']['type'];
$file['tmp_name'] = $_FILES['file']['tmp_name'];
$file['error'] = $_FILES['file']['error'];
$file['size'] = $_FILES['file']['size'];

	if(!empty($file['name']))
	{
		if($file['type'] == "image/gif")
		{
			if($file['size'] <= 1024000)
			{
				if(is_uploaded_file($file['tmp_name']))
				{
					$randnum = rand(0,9 );
					$newadd = "upload/".$message['time'].$randnum.$file['name'];
					$uploadfile=move_uploaded_file($file['tmp_name'],$newadd);
					//var_dump($uploadfile); true
				}
			}
			else
			{
				echo "<a href='javascript:history.go(-1);'>the image size big than 1m,click here to back</a>";
			}
		}
		else
		{
			//var_dump($uploadfile); NULL
			echo "<a href='javascript:history.go(-1);'>error,the type is not image/gif,click here to back</a>";
		}
	}
	else
	{
		$newadd="upload/default.gif";
	}



	function specialcharss($msg)
	{
		$msg = str_replace("&","&amp;",$msg );
		$msg = str_replace("<","&lt;",$msg );
		$msg = str_replace(">","&gt;",$msg );
		$msg = str_replace(" ","&nbsp;",$msg );
		$msg = str_replace("\r\n","\n",$msg );
		$msg = str_replace("\r","",$msg );
		$msg = str_replace("\n","<br />",$msg );
		$msg = str_replace(",","&#44;",$msg );
		$msg = str_replace("%","&#37;",$msg );
		$msg = preg_replace("/\\\\t/is"," ",$msg );
		$msg = preg_replace("/\\t/is"," ",$msg );
		return $msg;
	}

//处理上传文件


/*
switch ($file['error'] )
{
	case 0:
		//echo $file['type'];
		if(empty($file))
		{
		$file['name']="debian.gif";
		$file['type']="image/gif";
		$file['tmp_name']=1;
		}if ($file['type'] == "image/gif" )
		{
		
			if (is_uploaded_file($file['tmp_name']) )
			{
				$nn="./upload/".$message['time'].$r.$file['name'];
				move_uploaded_file($file['tmp_name'],$nn); //日期加上文件名
				//echo "上传成功{$message['time']}{$file['name']}";
			}

		}else{
			//echo "<script>alert('只允许上传GIF图片');history.go(-1);</script>";
		}
		break;
	default:
		echo "上传失败，错误类型{$file[error]}<br>";
}
*/
//将表单提交数据写入文本

	if(!empty($message['msg']) && ($uploadfile || $newadd ) )
	{
		
		//处理表单内容长度
		$message['name'] = substr($message['name'],0,20 );
		$message['title'] = substr($message['title'],0,40 );
		$message['msg'] = substr($message['msg'],0,1000 );
		
		//处理转义字符
		//$msg['name']=str_replace("\\","",$msg['name'];
		//$msg['title'] = str_replace("\\","",$msg['title'] );
		//$message['msg'] = str_replace("\\","",$message['msg'] );
		//数据特殊字符处理
		//$names=htmlspecialchars("$sname",ENT_QUOTES));//nl2br
		//$titles=htmlspecialchars("$stitle",ENT_QUOTES));
		//$messages=htmlspecialchars("$smessage",ENT_QUOTES);

		$message['name'] = specialcharss($message['name'] );
		$message['title'] = specialcharss($message['title'] );
		$message['msg'] = specialcharss($message['msg'] );
		
		
		$f = fopen("msg.inc","a+" ) or die("您打开的文件不存在" );
		
		
		
		$newmsg = "@@".$message['name']."	".$message['title']."	".$message['msg']."	".$message['time']."	".$newadd;
		fwrite($f,$newmsg,10000);
		fclose($f);
		echo "ok! <a href='v.php'>click here to go back !</a>";
	}
	else
	{
		echo " or the message is empty,click here -> <a href='v.php'>go back !</a>";
	}


?>
</body>