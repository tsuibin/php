<?php
include 'adodb/adodb.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");
$sql="select name from books";
$rs=$conn->execute($sql);
echo $rs->GetMenu('menu','hello'); 
?> 
 
 include 'adodb/adodb.inc.php';
include 'adodb/adodb-pager.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");