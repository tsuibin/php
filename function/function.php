<?php
function __autoload($classname){
    include_once "./include/class/{$classname}_class.php";
}
$db=new Database();
$rs=$db->viewdata($fid);
include "smarty.php";
$tpl->caching=ture;
$tpl->cache_lifetime=1;
$tpl->assign("r",$rs);
$tpl->display("function.tpl");

?>