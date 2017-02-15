<?php


function register($name=null,$a=null,$b=null,$c=null,$d=null,$tablename="person"){
	
	switch($tablename){
		case "car":
			$sql="insert $tablename values('$a','$b','$c',$d)";
			break;
		case "preson":
			$sql="insert $tablename values('$name','$b')"
			break;
		}
	$db->query($sql);
	
	}

?>