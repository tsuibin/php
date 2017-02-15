<?php
	include "smarty.php";
	//$tpl->caching=ture;//打开缓存技术
	$now=date("Y-m-d H:i:s");
	$tpl->assign("now",$now);
	$tpl->display("test.tpl");
	
?>