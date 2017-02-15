<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="include/css/css_babel.css">
<style type="text/css">
body, html { background: #000 no-repeat 50% 0; }
</style>
<link rel="stylesheet" type="text/css" href="include/css/css_extra.css">
<link rel="stylesheet" type="text/css" href="include/css/css_zen.css">
<link rel="stylesheet" type="text/css" href="include/css/lightbox.css" media="screen">
<body style="background-color: #333333">
<style>
#nav{
	position:absolute;
	top:10px;
	right:5px;}
a{text-decoration:none;
color:#CCC;}
#hr{
	position:relative;
	top:10px;}
</style>
<body>
<div id="leftnav">
<img src="images/havleft.gif" /></div>
<a href='#' class='g' >随机函数</a> <a href='#' class='g' >函数搜索</a> <a href='#' class='g' >热门函数</a> <a href='#' class='g' >用户登录</a> <a href='#' class='g' >注册</a> <a href='#' class='g' >关于我们</a>
	<div id="nav">
	<a href="?a=index.jsp" >随机</a> | <a href="?a=search.jsp" >搜索</a> | <a href="?a=push.jsp">推荐</a> | <a href="?a=login.jsp">登陆</a> | <a href="?a=register.jsp">注册</a> | <a href="?a=about.jsp">关于</a>
    </div>
	<span id="hr"><hr></span>
    </body>
    <?php

$a=$_GET['a'];
$f=$_GET['f'];print_r($f);
print_r($a);


if(isset($a)){
switch($a){
			case "index.jsp":
				include_once "randsmarty.php";
				break;
			case "search.jsp":
				include_once "search.php";
				echo "search.jsp";
				break;
			case "push.jsp":
				include_once "push.php";
				echo "push.jsp";
				break;
			case "login.jsp":
				include_once "login.php";
				echo "login";
				break;
			case "register.jsp":
				include_once "register.php";
				echo "register.php";
				break;
			case "about.jsp":
				include_once "about.php";
				echo "about";
				break;

}
}
if(isset($f)){
	$fid=$f;
	include_once("function.php");
	
	
}
if(isset($_GET['search'])){
$keyword=$_GET['search'];
echo $keyword;

if(!empty($keyword)){
	function __autoload($classname){
	include_once "./include/class/{$classname}_class.php";    }
	
	$db=new Database();
	$r=$db->searchdata($keyword);
	//var_dump($r);
	if(is_array($r)){
		foreach($r as $v){
			if(is_array($v)){
				foreach($v as $key=>$func){
					$r[]="<a href='?f={$key}'><font color='red'>$func</font></a> ";

				}
			}
	include_once "smarty.php";
	$tpl->caching=ture;
	$tpl->cache_lifetime=-1;
	
 	print_r($r);
	$tpl->assign("r",$r);
	$tpl->display("results.tpl");
	}
	}else{
		echo "没有找到相关函数";	
	}

}
}
?>

