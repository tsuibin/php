<?php 
	include "include/smarty/Smarty.class.php";
	$tpl=new Smarty();
	define("SPATH","E:/function");
	
	$tpl->template_dir=SPATH."/templates";
	$tpl->compile_dir=SPATH."/templates_c";
	$tpl->config_dir=SPATH."/config";
	$tpl->cache=SPATH."/cache";
	//$tpl->left_delimiter='<}';
	//$tpl->right_delimiter='}>';
	//$tpl->right_delimiter='>}';
?>