<?php
session_start();
header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>
<script>
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			//alert(t);
			document.getElementById("main").innerHTML=t;
		}
	}
}
var lastpage;
function ajaxpage(page)
{
	page=page+1;
	alert("pagec.php?page="+page+1);

	http_request=loadajax("pagec.php?page="+page+1);
}
</script>
<?php 
//$page = $_GET['page'];
if (empty($page)) {
    $page = 1; //当前页数
}
$_SESSION['page']=$page;
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

//
//echo $pagecount;
?>
<div id="main"></div>
<a href="#" onclick="ajaxpage('1');">首页</a>
<?php
if ($_SESSION['page'] <= 1) {
    ?>
<a>上一页</a>
<?php
} else {
    ?>
<a href="#" onclick="ajaxpage('<?php echo $_SESSION['page']=$_SESSION['page']-1;?>');">上一页</a>
<?php
}
if ($_SESSION['page'] >= $pagecount) {
    ?>
<a>下一页</a>
<?php
} else {
    ?>
<a href="#" onclick="ajaxpage('<?php echo $_SESSION['page']=$_SESSION['page']+1;?>');">下一页</a>
<?php
}
?>
<a href="" onclick="ajaxpage('<?php echo $pagecount;?>');">尾页</a>