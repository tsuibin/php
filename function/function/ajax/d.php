<?php
header("Content_Type:text/html;charset=utf8");

$where=$_GET['where'];
$arr['hk']=array("九龙","望角","迪士尼");
$arr['tw']=array("台北","台南","阿里山");
$arr['cn']=array("凤凰","敦煌","三亚");

//var_dump($where);
if(!empty($where))
{
	echo "<select name='two' size='5'>";
	foreach($arr[$where] as $v)//避免了使用switch case !
	{
		echo "<option value='hk'> {$v}</option>";
	}
	echo "</select>";
}

?>