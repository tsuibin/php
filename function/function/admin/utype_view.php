<?php

//接收表单提交数据
$id=$_GET['id'];
$utype=$_GET['utype'];

if(!empty($id)){
		$db=new mysqli("localhost","root","root","function","3306");
		$db->query("set names utf8");

		$uti=$db->query("select * from func_utype where utype_id='$id'");
		$ruti=$uti->fetch_assoc();
		
		$routt=explode(" ",$ruti['utype_auth']);
		//print_r($routt);
		if(!empty($ruti['utype_type'])){
			$routa=explode(" ",$ruti['utype_type']);
		}
		//echo "该用户组有的权限";print_r($routa);
		$check1;
		$check2;
		$check4;
		foreach($routt as $value){
			switch($value){
				case 1:
					$check1="checked='checked'";
					break;
				case 2:
					$check2="checked='checked'";
					break;
				case 4:
					$check4="checked='checked'";
					break; 
			}
		}

?>
  <div align="center">
  <form id="form1" name="form1" method="post" action="utype_update.php">
<p align="left">用户组名称<br />

  <input type="text" name="utype_name" value="<?php echo $utype; ?>"/><br /><br />
  允许管理函数组<br />
<?php

  		$rs=$db->query("select * from func_ftype");
  		
	//	var_dump($routa);
		while($rss=$rs->fetch_assoc()){


			echo "<input type='checkbox' value={$rss['ftype_id']} ";
			
			if(is_array($routa)){
				foreach($routa as $v){
					if($v==$rss['ftype_id'])
					{ 
					echo "checked='checked'";
					}}}


			echo " />名:{$rss['ftype_name']}<br>";
			
			//foreach ($routa as $v){
				
			//		if($v==$rss['ftype_id']){
							//$rss['ftype_id']['q']="checked='checked";
			//				echo $rss['ftype_id']."#########有权限<br>";
			//		}
			//}
			
			//echo $rss['ftype_id']."<br>";
			/*foreach ($routa as $v){
				
					if($v!=$rss['ftype_id']){
						echo $rss['ftype_id']."XXXXXXXXX没权限<br>";
					}
			}*/
			
			
			
			//echo "有权限？ {$rss['ftype_id'][$v]} 权限数字: {$rss['ftype_id']} 权限名:{$rss['ftype_name']}<br>";

			
		}
		
		//echo "所有组id";print_r($arr);
		//print_r($ck);
		
	/*	foreach ($routa as $v)
		{
			
		} 
		*/
		//print_r($rss);
		//echo "函数组编号 :".$rss['ftype_id']." 管理函数组 :".$rss['ftype_name'];
		
/*while($rraa=$sql_uta->FETCH_array()){
	foreach($routt as $key=>$vav){
		echo $vav;
		if($vav==$rraa[0]){
			$check[$routt[$key]]="checked='checked'";
		}
	}
	echo "<input type='checkbox' name='utype_type[]' value=".$rraa['ftype_id']." ".$check[$rraa['ftype_id']]."/>".$rraa['ftype_name']."<br />";
	
}
		print_r($rraa);
	*/	
  		

  		
?>
<br />
  用户组权限<br />
  <input type='checkbox' name='utype_auth[]' value='1' <?php echo $check1;?> />增加<br />
  <input type='checkbox' name='utype_auth[]' value='2' <?php echo $check2;?> />修改<br />
  <input type='checkbox' name='utype_auth[]' value='4' <?php echo $check4;?> />删除<br />
  <br />
  <br />
  <input type="submit" name="Submit" value="发布" />

  </form>

  </div>
<?php } ?>