<?php
session_start();
echo 	$_SESSION['cart'][888];
	$_SESSION['cart'][888]+=8;
	$_SESSION['cart'][887]+=2;
	print_r($_SESSION['cart']);
if(isset($_GET['cart']))
{
	
	$id=$_GET['cart'];
	$key=$_GET['cart'];
	$title=$_GET['title'];
	$price=$_GET['price'];
	$_SESSION['cart'][$id]+=1;

//	$_SESSION['title'][]=array($title=>$key);
	//$_SESSION['title']=array_merge_recursive($_SESSION['title'],array($key=>$title));
	// array_merge_recursive() //array_merge 合并两个数组,下标重新分配
	
	if($_SESSION['title']==null)
	{
		$_SESSION['title']=array();//初始化数组
	}
	if($_SESSION['price']==null)
	{
		$_SESSION['price']=array();
	}
	
	$_SESSION['title']=$_SESSION['title']+array($key=>$title);
	$_SESSION['price']=$_SESSION['price']+array($key=>$price);
	print_r($_SESSION['title']);
//	$_SESSION['title']=array();
	//$a[书名][编号]
	/*
echo "<hr>";
foreach($a as $key=>$v)
{
	print_r($key);
}
*/
}



$db=new mysqli("localhost","root","root","mybook");
$db->query("set names utf8");
$sql="select id,name,title,price from books";
//id,title,name,description
$stmt=$db->prepare($sql) or die("false");


//$stmt->bind_param(); 
$stmt->execute();
//$stmt->bind_param("is",$id=,$title=); 
$stmt->bind_result($a,$b,$c,$d);
echo "<table border='2'>";
while($stmt->fetch()){
	echo "<tr><td>标题:<a href='info.php?id={$a}'>".$c."</a></td><td><a href='?cart={$a}&&title={$c}&&price={$d}'>加入购物车</a></td></tr>";
	echo "<tr><td>姓名:".$b."</td></tr>";
}
echo "</table>";
echo "<a href='bc.php'>查看购物车</a>";

?>