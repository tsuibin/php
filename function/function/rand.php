<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
db();
function db(){
$db = new mysqli("localhost","root", "root","function",6033);
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
echo "<div  style='width:800px' class='blank'>";
			foreach ($rows as $v) {
				//print_r($v);
			//	foreach($v as $id=>$n)
			//	{
								$rca=array(1,2,3,4,5,6,7,8,9,0,'A','B','C','D','E','F');
								$str='';
							for($i=0;$i<6;$i++)
							{
									$r=rand(0,15);
									$str.=$rca[$r];
							}
					$hn=rand(10,36);
				echo "<span style='font-size: {$hn}px'>"  .  "<a href='?f={$v['func_id']}' "  .  " style='color:#{$str}'>".$v['func_name']."</a> </span>";	
			//	}
			}
echo "</div>";	
			}

}
?>
