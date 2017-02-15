<?php
$fname=$_GET['fname'];
$db=new mysqli("localhost","root","root","function",6033);
$db->query("set names utf8");
$sql="select func_name from func_function where func_name = $fname";
$db->query($sql);


?>
