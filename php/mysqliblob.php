<?php
$con=new mysqli("localhost","root","root","mybook");

/* 正常的可存储图片
$f=fopen("ubuntu.gif","r");
$img=fread($f,filesize("ubuntu.gif"));
fclose($f);
$img=$con->escape_string($img);
$sql="insert str values('image','$img')";
$rs=$con->query($sql);
var_dump($rs);
*/
?>