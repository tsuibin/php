<?php
	$con=mysql_connect("localhost","root","root");
	mysql_query("set names utf8");
	$rs=mysql_db_query("mybook","select id,name,title from books",$con);
	//select max(price) from books 最大值
	$row=mysql_result($rs,1,"title"); //第一个字段 第二条数据 第三个参数指定第几行的哪一个值的获取
//只能取一个值	
//移动指针
$row=mysql_data_seek($rs,1); //纯移动指针
mysql_fetch_row($rs);
	var_dump($row);
?>
echo mysql_errno();错误编号
echo mysql_error();错误信息
mysql_create_db
mysql_drop_db
mysql_fetch_object 结果集中取得一行作为连接
mysql_affect_rows 操作影响的行数