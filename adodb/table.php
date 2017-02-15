<?php
include 'adodb/adodb.inc.php';
include 'adodb/tohtml.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");

$sql="select * from books";
$rs=$conn->selectlimit($sql,25,0);
//$rs=$conn->execute($sql);
rs2html($rs);

?>