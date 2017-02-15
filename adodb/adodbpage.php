<?php
include 'adodb/adodb.inc.php';

include 'adodb/adodb-pager.inc.php';
$conn=&NewADOConnection("mysql://root:root@localhost/mybook");
$conn->execute("set names utf8");

$pager=new ADODB_Pager($conn,"select * from books");
$pager->render(25);
?>