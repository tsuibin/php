
<?php


db();
function db(){
$db = new mysqli("localhost","root", "root","function",6033);
//#######################
//#Smarty#

include_once "smarty.php";
$tpl->caching=ture;
$tpl->cache_lifetime=5;
//随机 5秒更新一次 
//编辑器
//描述 代码 描述 
//str[code][/code]
//发布多媒体文件? Monday, 2008-11-24 5:47 AM 
// ajax!!
//########################


 if(mysqli_connect_errno())
	        {
			    die("数据库连接失败");
	        }
	        else {
			$db->query("set names utf8");
			echo "<br />数据库对象初始化成功,Class->db进行访问<br />";
			$obj=$db->query("select func_id,func_name from func_function order by rand() limit 0,200");
			//$finfo=$obj->fetch_assoc();//assoc关联数组  对象fields  row索引数组 fetch_array关联加索引数组
  	while($row=$obj->fetch_assoc()){
					$rows[ ]=array("func_id"=>$row['func_id'],"func_name"=>$row['func_name']);
				}
				//print_r($rows);

$div1= "<div  style='width:800px' class='blank'>";
$tpl->assign("div1",$div1);

			foreach ($rows as $v) {
				//print_r($v);
			//	foreach($v as $id=>$n)
			//	{
								$rca=array(1,2,3,4,5,6,7,8,9,0,'A','B','C','D','E','F');
								$str='';
							for($i=0;$i<3;$i++)
							{
									$r=rand(0,15);
									$str.=$rca[$r];
							}
					$hn=rand(9,36);
				$echoarr[]= "<span style='font-size: {$hn}px'>"  .  "<a href='?f={$v['func_id']}' "  .  " style='color:#{$str}'>".$v['func_name']."</a> </span>";	

			//	}
			}
$tpl->assign("echoarr",$echoarr);
$div2 = "</div>";	
$tpl->assign("div2",$div2);
$tpl->display("rand.tpl");
			}

}

?>
