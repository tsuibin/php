<?php
include 'adodb/adodb.inc.php';
include 'adodb/tohtml.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");
$str="alex's";
$str=$conn->qstr($str);
//echo $str;// 'alex\'s'
$sql="select * from books where name={$str}";

echo $conn->dbdate(time());//自动加上单引号
$conn->affected_Rows()//数据库已经更新 条记录数

?>