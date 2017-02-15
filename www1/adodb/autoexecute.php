<?php
include 'adodb/adodb.inc.php';
include 'adodb/tohtml.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");
$arr=array("title"=>"PHPds宝典","name"=>"张三");
$rs=$conn->execute("select * from books");
$sql=$conn->getinsertsql($rs,$arr);//获取SQL命令
echo $sql;
//$conn->autoexecute("books",$arr,"UPDATE","id=299");//lastname like %
?>