<?php
session_start ();
$is="dsf";
settype($is,int);
echo $is;
$cartarr = $_SESSION ['cart'];
print_r($cartarr);
//$title=array_flip($_SESSION['title']);//数组下标与值替换位置
$title = $_SESSION ['title'];
$price = $_SESSION ['price'];

if (isset ( $_GET ['del'] )) {
	
	$_SESSION ['cart'] [$_GET ['del']] -= 1;
	if ($_SESSION ['cart'] [$_GET ['del']] <= 0) {
		unset ( $_SESSION ['cart'] [$_GET ['del']] );
	}
}
//print_r ( $title );
echo "<hr>";
if (isset ( $cartarr )) {
	foreach ( $cartarr as $key => $value ) {
		echo "编号" . $key . "书名:<a href='info.php?id={$key}' >" . $title [$key] . "</a>数量" . $value . "单价" . $price [$key] . "  <a href='?del={$key}'>删除</a><br />";
	
	}
	$zprice = $value * $price [$key];
	echo "总价格{$zprice}";
} else {
	echo "空的<br />";
}
echo "<br /><a href='v1.php'>back</a>";
?>
