<?php


//获取计数器的值
$count=$_COOKIE['count'];
if(empty($count))
{
	$count=0;
}

$count++;

setcookie("count",$count,time()+10000000);

echo "the count value :".$count;
//判断是否获取到

//第二步显示计数器的值 累加

//保存计数器的值
?>