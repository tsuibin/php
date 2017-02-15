<?php

	$con=new mysqli("localhost","root","root","mybook");
	$con->query("set names utf8");
	$id=201;
	$sql="select id,title,name from books where id=? or title like ?";
	$stmt=$con->prepare($sql) or die("false");
	//var_dump($stmt);
	$title="%java%";
	$stmt->bind_param("is",$id,$title); 
	/*
		设置类型,i 整型,s 字符串,d 浮点型,b 二进制
	
		i对应201 s对应%java% 不能直接  赋值 ，只能绑定变量
	
	*/
	$stmt->execute();	
		/*
		
		执行 发送这个sql命令
		
		*/
		
		//var_dump($stmt);
		$stmt->bind_result($a,$b,$c);
		
	while($stmt->fetch()){
	echo "$a $b $c";
	echo "<br>";
	}
	$stmt->close();
	$con->close();

	/*
	select * from books where id=?
	
	*/


?>

