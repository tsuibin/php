<?php
	$con=mysql_connect("localhost","root","root");
	mysql_query("set names utf8");
	$rs=mysql_db_query("mybook","select id,name,title from books",$con);
	var_dump($rs);
	/**echo mysql_num_fields($rs);
	//结果集中字段个数 几行 几列
	//echo mysql_num_rows($rs);
	
	//结果集中有几条数据
	/*
	if(mysql_num_fields($rs)>0)	
	*/
	
	echo "<table border='2'>";
	echo "<tr>";
	while($obj=mysql_fetch_field($rs)){
		echo "<th>".$obj->name."</th>";
	}
	echo "</tr>";
	while($row=mysql_fetch_assoc($rs)){
		echo "<tr>";
		foreach($row as $v){
		
		}	
	}
	echo "</table>";
	
	
	mysql_fetch_assoc
	mysql_fetch_object
	mysql_fetch_array
	mysql_fetch_field
	mysql_field_type
	
	
?>


