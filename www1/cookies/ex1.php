<?php
$count['count']=$_COOKIE['count']['count'];
$count['ip']=$_SERVER['SERVER_ADDR'];
if(empty($count['count']))
{
	$count['count']=0;
	
}

$count['count']++;

setcookie("count[count]",$count['count'],time()+10000000);
setcookie("count['ip']",$count['ip'],time()+10000000);
if($count['count']==1)
{
	echo "welcome to this site!";
}
else {
echo "this is you:".$count['count']." times to visted";
echo "last you visted ip address is ".$count['ip']." <br />and this vista ip is ".$_SERVER['SERVER_ADDR'];
echo date(Y-m-d);
}
?>