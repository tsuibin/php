<?php
header("Content_Type:text/html;charset=utf8");

$type=$_GET['type'];
$arr['new']=array("国际新闻","体育新闻","八卦新闻");
$arr['sport']=array("国际篮球","体育项目","八卦足球");
$arr['play']=array("国际活动","体育明星","八卦星座");
if(!empty($type))
{
	echo "<ul>";
	foreach($arr[$type] as $v)//避免了使用switch case !
	{
		echo "<li><a href=''> {$v}</a></li>";
	}
	echo "</ul>";
}
?>
