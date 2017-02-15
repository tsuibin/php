<?php

	$con=new mysqli("localhost","root","root","mybook");
	/*
	if(mysqli_connect_errno())
	{
			die("数据库连接失败");
	}
	*/
	$con->query("set names utf8");
	$sql="select name from books;select title from books;select title from books";
	$ok=$con->multi_query($sql);//执行多条sql命令
	if($ok)
	{
		do
		{
		/*$rs=$con->next_result();*/
		$rs=$con->store_result();
			if($rs)
			{
				$row=$rs->fetch_row();
				print_r($row);
			}
		
		}while($con->next_result());
	}



?>