
<?php

$db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$uadd=$db->query("select ftype_id,ftype_name from func_ftype");
while($ruadd=$uadd->FETCH_assoc()){
	$ruadds[]=$ruadd;
}
?>
  <div align="center">
  <form id="form1" name="form1" method="post" action="utype_create.php">
<p align="left">用户组名称<br />

  <input type="text" name="utype_name" value=""/><br /><br />
  允许管理函数组<br />
  <?php
  
  foreach($ruadds as $value){
  		echo "<input type='checkbox' name='utype_type[]' value={$value['ftype_id']} />{$value['ftype_name']}<br />";
  	}
  ?><br />
  用户组权限<br />
  <input type='checkbox' name='utype_auth[]' value='1' />增加<br />
  <input type='checkbox' name='utype_auth[]' value='2' />修改<br />
  <input type='checkbox' name='utype_auth[]' value='4' />删除<br />
  <br />
  <br />
  <input type="submit" name="Submit" value="发布" />

  </form>

  </div>
