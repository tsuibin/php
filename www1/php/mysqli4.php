<?php
$con=new mysqli("localhost","root","root","mybook");
$s="world";// hello world's 这里的'需要转义!!! \'
$s=$con->escape_string($s);//用户表单接受的值 都要处理一下！
/*
$sql="insert str(str) values('{$s}')";
$rs=$con->query($sql);
var_dump($rs);
*/
//输出的时候 要用htmlspecialchars 或者 htmllentities
?>