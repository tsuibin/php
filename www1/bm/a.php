<?php
$db = new mysqli("localhost", "root", "root", "mybook");
$db->query("set names utf8");
$sql = "INSERT INTO `mybook`.`books` VALUES (default, ?, ?, ?, ?, ?, ?)";
//id,title,name,description
$stmt = $db->prepare($sql) or die("false");
echo "prepare";
$name = "aaa";
$title = "bbbb";
$price = 33.1;
$yr = 1991;
$description = "不错阿";
$saleamount = 2000;
$stmt->bind_param("ssdisi", $name, $title, $price, $yr, $description, $saleamount);
echo "bind_param";
$stmt->execute();
echo "execute";
print_r($stmt->execute());
//$stmt->bind_param("is",$id=,$title=); 
//$stmt->bind_result($a,$b,$c,$d,$e,$f,$g);	
$stmt->close();
$db->close();
?>