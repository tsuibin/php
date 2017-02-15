  已有函数类型
  <select name="type_id" >
  <?php
  $db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$obj9=$db->query("select ftype_id,ftype_name from func_ftype");
while($roww2=$obj9->FETCH_assoc()){
	$roww3[]=$roww2;
}
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