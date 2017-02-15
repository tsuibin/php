
<?php
$array = '0123456789ABCDEFG';
$s = '';
for ($i = 1; $i < 50; $i++)
{
       $s .= $array[rand(0,strlen ($array) - 1)];
}
//echo $array[9];
echo $s;
?>

<?php

if(!empty($_POST)){
$subject=$_POST['subject'];
$content=$_POST['content'];
$user=$_POST['user'];
// $subject=htmlspecialchars("$subject",ENT_QUOTES);
// $content=htmlspecialchars(nl2br("$content"),ENT_QUOTES);
// $user=htmlspecialchars("$user",ENT_QUOTES);
function specialchars($msg,$trim=0,$br3=0) {
$msg = str_replace("&","&",$msg);
$msg = str_replace("<","<",$msg);
$msg = str_replace(">",">",$msg);
$msg = str_replace(" ", " ", $msg);
$msg = str_replace( "\r\n", "\n", $msg);
$msg = str_replace( "\r", "", $msg);
if($br3==0){$msg = ereg_replace("\n((al)*\n){3,}","\n",$msg);}
$msg = str_replace("\n", "<br />", $msg);
$msg = str_replace(",", ",", $msg);
$msg = str_replace("%", "%", $msg);
$msg=preg_replace("/\\\\t/is","\wsm",$msg);
$msg=preg_replace("/\\t/is"," ",$msg);
if($trim){
$msg = trim($msg);
}

return $msg;
}
$subject=specialchars($subject);
$content=specialchars($content);
$user=specialchars($user);
$date=date('Y-m-d');

$filename=$_FILES["file"]["name"];
$tmppath=$_FILES["file"]["tmp_name"];
$error=$_FILES["file"]["error"];
$type=$_FILES["file"]["type"];
$size=$_FILES["file"]["size"];
if($filename){
if($type!="image/bmp" && $type!="image/gif" && $type!="image/jpg" && $type!="image/jpeg" && $type!="image/png"){
echo "<script>alert('Only Image File!!!')</script>";
echo "<script>history.go(-1);</script>";
exit;
}
if($size>=1000000){
echo "<script>alert('Only Max 1MB File!!!')</script>";
echo "<script>history.go(-1);</script>";
exit;
}
}
if($error!=4){
$uploadname=time()."_".rand(1000,9999)."_".$filename;
switch($error){
case 0:
if(is_uploaded_file($tmppath)){
move_uploaded_file($tmppath,"./upload/".$uploadname);
}
break;
default:
echo "Error Upload!type={$error}<br />";
}
}else{
$uploadname="default.png";
}
$array = array($subject,$content,$user,$date,$uploadname);
$memo=implode("##",$array);
//$save=file_put_contents("memo.txt",$memo);
$open=fopen("memo.txt","a+");
$write=fwrite($open,$memo."\r\n");
fclose($open);
}

?>


<form action="" method="post" enctype="multipart/form-data">
<table align="center" border="1" cellpadding="0" cellspacing="0" >
<tr><td>Subject</td><td><input type="text" name="subject" size="20" maxlength="20"></td></tr>
<tr><td width="300">Content</td><td><textarea name="content"></textarea></td></tr>
<tr><td>User</td><td><input type="text" name="user" size="20" maxlength="20"></td></tr>
<tr><td>Image</td><td><input type="file" name="file"></td></tr>
<tr><td colspan="2"><input type="submit" value="submit"> <input type="reset" value="reset"></td></tr>
</table>
</form>
<?php
if(!is_file("memo.txt") || filesize("memo.txt")==0){
echo "NO Content!!!";
exit;
}


?>
<table align="center" border="1" cellpadding="0" cellspacing="0" style="margin-left:10px; table-layout:fixed;">
<tr><td>Subject</td><td>Content</td><td>User</td><td>Date</td><td>Image</td></tr>
<?php

$fp=fopen("memo.txt","r");

while($temp=fgets($fp,2000)){
$msg=explode("##",$temp);
for($i=0;$i<5;$i++){
if(!$msg[$i]){
$msg[$i]=" ";
}
}
?>
<tr>
<td><?php echo $msg[0];?></td>
<td><?php echo $msg[1];?></td>
<td><?php echo $msg[2];?></td>
<td><?php echo $msg[3];?></td>
<td><img src="upload/<?php echo $msg[4];?>" /></td>
</tr>
<?php
}
fclose($fp);
?>

</table>