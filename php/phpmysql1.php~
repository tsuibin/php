<?php
	//第一步 建立数据库连接 or die终止程序执行
	//@屏蔽错误
	$con=mysql_connect("localhost","root","root") or die("connect false");

	//var_dump($con);
	
	//第二步 选择数据库
	$flg=mysql_select_db("mybook",$con) or die("数据库不存在");
	//var_dump($flg);
	
	//第三步 编写数据库命令
	$sql="select * from books";
	
	//第四步 发送数据库命令 
	mysql_query("set names utf8");
	$rs=mysql_query($sql,$con);
	
	var_dump($rs);
	
	//第五步 只针对查询返回结果集 进行处理
	$row=mysql_fetch_row($rs); //一次返回一条数据 需要写一个循环进行操作
	//while($row=mysql_fetch_row($rs)){ //_row索引数组
	//while($row=mysql_fetch_assoc($rs)){ //_assoc返回关联数组
	//while($row=mysql_fetch_array($rs,MYSQL_NUM)){
	//返回关联和索引数组 默认MYSQL_BOTH 只返回MYSQL_NUM索引 只返回MYSQL_ASSOC关联
//		print_r($row);
//		echo "<br>";	
//	}

	while($row=mysql_fetch_object($rs)){ 
	//返回对象
		print_r($row);
		echo $row->name;
		echo "<br />";
	}
	
	//第六步 清空资源
	mysql_free_result($rs);
	mysql_close($con);
	//print_r($row);


?>
	
	
	


