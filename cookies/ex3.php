<?php
	$ct=$_COOKIE["ct"];
	if(empty($ct))
	{
		$now=time();
		setcookie("ct",$now);//不设置时间 每次重新计数
	}
	
	$stop=time()-$ct;
	$stop=date("i分s秒",$stop);
	echo "you time ".$stop;
?>