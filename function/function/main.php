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
	<div id="nav">
	<a href="?action=index" >首页</a> | <a href="?action=search" >搜索</a> | <a href="?action=push">推荐</a> | <a href="?action=login">登陆</a> | <a href="?action=register">注册</a> | <a href="?action=about">关于</a>
    </div>
	<span id="hr"><hr></span>
    <?php
$action=$_GET['action'];
switch($action){
			case "search":
				include_once "search.php";
				echo "search";
				break;
			case "push":
				include_once "push.php";
				echo "push";
				break;
			case "login":
				include_once "login.php";
				echo "login";
				break;
			case "register":
				include_once "register.php";
				echo "register.php";
				break;
			case "about":
				include_once "about.php";
				echo "about";
				break;

}
?>
</body>
