<?php
$con=new mysqli("localhost","root","root","mybook");
date_default_timezone_set("Etc/GMT-8");
$d1=date("Y-m-d H:i:s",time()+7*24*60*60); //7天之后的时间
echo $d1;

$sql="insert datatmp values('{$d1}','{$d1}','{$d1}')";
$rs=$con->query($sql);
var_dump($rs);
?>