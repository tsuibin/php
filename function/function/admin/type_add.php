<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$obj9=$db->query("select ftype_id,ftype_name from func_ftype");
while($roww2=$obj9->FETCH_assoc()){
	$roww3[]=$roww2;
}
?>
<body>
  <div align="center">
  <form id="form1" name="form1" method="post" action="type_create.php">
<p align="left">添加类型名称

  <input type="text" name="type_name" value=""/><br /><br />
  已有函数类型
  <select name="type_id" >
  <?php
  foreach($roww3 as $value){

  		if($row['ftype_id']==$value['ftype_id']){
  			$select="selected=\"selected\"";
  		}else{
  			$select="";
  		}
  		echo $row['ftype_id'];
  		echo "<option value={$value['ftype_id']} $select>{$value['ftype_name']}</option>";
  	}
  ?>
  </select>
  <br />
  <input type="submit" name="Submit" value="添加" />

  </form>

  </div>
</body>
