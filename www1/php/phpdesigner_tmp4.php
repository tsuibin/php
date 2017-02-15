<?php

/**
 * 
 * TopSvr CMS Platform
 *
 * @author     TopSvr Development Team
 * @copyright  Copyright (c) 2008 Topsvr team (http://www.topsvr.com)
 * @license    GNU General Public License 2.0
 * @version    200811416:47
 *
 * /**/

//接收文本内容
$msg['title'] = $_REQUEST['title'];
$msg['name'] = $_REQUEST['name'];
$msg['msg'] = $_REQUEST['msg'];

//获取时间
$msg['time'] = date(ymdhis );

//接收文件
$file['name'] = $_FILES['file']['name'];
$file['type'] = $_FILES['file']['type'];
$file['tmp_name'] = $_FILES['file']['tmp_name'];
$file['error'] = $_FILES['file']['error'];
$file['size'] = $_FILES['file']['size'];


//处理文本内容
//$cmsg=NULL;
//处理转义字符
//$msg['name']=str_replace("\\","",$msg['name'];
$msg['title'] = str_replace("\\","",$msg['title'] );
$msg['msg'] = str_replace("\\","",$msg['msg'] );
//处理表单内容长度
$msg['name'] = substr($msg['name'],0,20 );
$msg['title'] = substr($msg['title'],0,40 );
$msg['msg'] = substr($msg['msg'],0,1000 );


//数据特殊字符处理
//$names=htmlspecialchars("$sname",ENT_QUOTES));//nl2br
//$titles=htmlspecialchars("$stitle",ENT_QUOTES));
//$messages=htmlspecialchars("$smessage",ENT_QUOTES);

function specialchars($msg,$trim = 0,$br3 = 0 )
{
    $msg = str_replace("&","&amp;",$msg );
    $msg = str_replace("<","&lt;",$msg );
    $msg = str_replace(">","&gt;",$msg );
    $msg = str_replace(" ","&nbsp;",$msg );
    $msg = str_replace("\r\n","\n",$msg );
    $msg = str_replace("\r","",$msg );
    if ($br3 == 0 )
    {
        $msg = ereg_replace("\n((　| )*\n){3,}","\n",$msg );
    }
    $msg = str_replace("\n","<br />",$msg );
    $msg = str_replace(",","&#44;",$msg );
    $msg = str_replace("%","&#37;",$msg );
    $msg = preg_replace("/\\\\t/is","\wsm",$msg );
    $msg = preg_replace("/\\t/is"," ",$msg );
    if ($trim )
    {
        $msg = trim($msg );
    }

    return $msg;
}
$msg['name'] = specialchars($msg['name'] );
$msg['title'] = specialchars($msg['title'] );
$msg['msg'] = specialchars($msg['msg'] );

//处理文件
$cfile = null;

//$file['name']=$_FILES['file']['name'];
//$file['tmp_name']=$_FILES['file']['tmp_name'];
//$file['error']=$_FILES['file']['error'];
//$file['size']=$_FILES['file']['size'];

switch ($file['error'] )
{
    case 0:
        if ($msg['file'] == "image/gif" )
        {

            if (if_uploaded_file($file['tmp_name']) )
            {
                //保存文件
                move_uploaded_file($file['tmp_name'],"./upload/.{$msg['time']}{$file['name']}" ); //日期加上文件名
                echo "上传成功{$newmsgtime}{$file['name']}";
            }
            echo "<script>alert('只允许上传GIF图片');history.go(-1);</script>";
        }
        break;
    default:
        echo "上传失败，错误类型{$file[error]}<br>";
}
///获取随机数
$r = rand(0,9 );

//保存文本内容
$f = fopen("msg.txt","a+" ) or die("您打开的文件不存在" );

$newmsg = "@@".$msg['name']."||".$msg['title']."||".$msg['msg']."||".$msg['tile']."||"."/upload/".$msg['time'].
    $r.$file['name']."\n";
//echo $newmsg;
fwrite($f,$newmsg ) or die("写入失败" );


rewind($f ); //复位指针
//echo fread($f,5);

//读取文件
//$allmsg[].=file_get_contents("msg.txt");
while ($tmp = fgets($f,2000) )
{
    $allmsg[] = fgets($f,2000 );
}

var_dump($allmsg );

//分割文本内容


//echo fread("msg.txt");


?>