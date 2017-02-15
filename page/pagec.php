<?php
header("Content_Type:text/html;charset=utf8");
$page = $_GET['page'];
if (empty($page)) {
    $page = 1; //当前页数
}
$pagesize = 2; //每页显示数量
$con = new mysqli("localhost", "root", "root", "mybook");
$con->query("set names utf8");
$sql = "select * from books";
$rs = $con->query($sql);
$count = $rs->num_rows; //总共显示数据个数
$pagecount = ceil($count / $pagesize); //根据总数 从数据库提取
$f = ($page - 1) * $pagesize; //根据当前页数筛选 显示数据,使用limit
$sql = "select * from books limit {$f},{$pagesize}";
$rs = $con->query($sql);
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_row()) {
        foreach ($row as $v) {
            echo "$v";
        }
        echo "<br>";
    }
}
//
//echo $pagecount;
?>