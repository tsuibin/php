<?php


$db= new mysqli("localhost","root", "root","function",6033);
$db->query("set names utf8");
$obj=$db->query("select func_id,func_name from func_function where func_name like '%func%' ");
while($row=$obj->fetch_assoc()){
					$rows[ ]=array("func_id"=>$row['func_id'],"func_name"=>$row['func_name']);
				}
				
				
print_r($rows);