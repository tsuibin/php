<?php 	
	echo "<a href='index.php'>�����ﷵ��</a>";
	//������ substr($str,0,20);
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
	//ת������\б��
	$name2=str_replace("\\","",$name);
	$title2=str_replace("\\","",$title);
	$message2=str_replace("\\","",$message);
	//��ȡ20λ
	$sname=substr($name2,0,20);
	$stitle=substr($title2,0,40);
	$smessage=substr($message2,0,1000);
	
	//���ݰ�ȫ����		
	$names=nl2br(htmlspecialchars("$sname",ENT_QUOTES));
	$titles=nl2br(htmlspecialchars("$stitle",ENT_QUOTES));
	$messages=htmlspecialchars("$smessage",ENT_QUOTES);

	
	if(empty($filename)){
	 $filename="debian.gif";
	 $type="image/gif";
	 

	if($type !="image/gif" ){
		echo "ֻ�����ϴ�gifͼƬ"; 
	}else{
	//�ļ��洢
	$f = fopen("message.txt","a+") or die("�ļ���ʧ��");
	fwrite($f,"<tr><td>������</td><td>$names</td></tr> <tr><td>���⣺</td><td>$titles</td></tr><tr><td>���ݣ�</td><td style='word-wrap:break-word;word-break:break-all;'>$messages</td></tr><tr><td>ʱ�䣺</td><td>$time</td></tr><tr><td>ͼƬ��</td><td><img src='./upload/$filename'></td></tr><br>\r\n",5000);// �ļ���д������ݣ�д��ĳ���
	fclose($f);
	//��ȡͼƬ��ַ
	
	//�ļ��ϴ�
	switch($error)
	{
		case 0:
			if(is_uploaded_file($filepath))
			{
				move_uploaded_file($filepath,"./upload/".$filename);
				echo "���Գɹ�!���ϴ����ļ��ǣ�".$type;
				echo "�ļ���С�ǣ�".$size."byte <a href='show.php'>�����ﷵ��</a>";
			}else{
				echo "û���ҵ��ϴ��ļ�";
			}
		break;
		case 1:
			echo "�ϴ�ʧ�ܣ������ļ��ϴ����ô�С2M";
		break;
		case 2:
			echo "�����ļ��ϴ�";
		break;
		case 3;
			echo "û���ļ����ϴ�";
		break;
	}
	}
	}else{
	if($type !="image/gif" )
	{
		echo "ֻ�����ϴ�gifͼƬ"; 
	}else{
	//�ļ��洢
	$f = fopen("message.txt","a+") or die("�ļ���ʧ��");
	fwrite($f,"<tr><td>������</td><td>$names</td></tr> <tr><td>���⣺</td><td>$titles</td></tr><tr><td>���ݣ�</td><td style='word-wrap:break-word;word-break:break-all;'>$messages</td></tr><tr><td>ʱ�䣺</td><td>$time</td></tr><tr><td>ͼƬ��</td><td><img src='./upload/$filename'></td></tr><br>\r\n",5000);// �ļ���д������ݣ�д��ĳ���
	fclose($f);
	//��ȡͼƬ��ַ
	
	//�ļ��ϴ�
	switch($error){
		case 0:
			if(is_uploaded_file($filepath)){
				move_uploaded_file($filepath,"./upload/".$filename);
				echo "���Գɹ�!���ϴ����ļ��ǣ�".$type;
				echo "�ļ���С�ǣ�".$size."byte <a href='show.php'>�����ﷵ��</a>";
			}else{
				echo "û���ҵ��ϴ��ļ�";
			}
		break;
		case 1:
			echo "�ϴ�ʧ�ܣ������ļ��ϴ����ô�С2M";
		break;
		case 2:
			echo "�����ļ��ϴ�";
		break;
		case 3;
			echo "û���ļ����ϴ�";
		break;
	}
	}
	}
	?>