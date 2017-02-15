<?php
header("Content-type: text/html; charset=utf-8"); 
$key=$_GET['key'];
if(!empty($key)){
$star=microtime();
$db=new Mysqli("localhost","root","root","function","3306");
$db->query("set names utf8");
$sql="select func_id,func_name from func_function where func_name like '%$key%'";
//echo $sql;echo "<br>";
$flg=$obj=$db->query($sql);

//var_dump($flg);echo "<br>";

$stop=microtime();
$t=$stop-$star;
//echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
echo "<div style='width:750px;' align='center'>";
echo "一共找到".$obj->num_rows."条结果 消耗".$t."秒";
echo "<hr>";
while($v=$obj->FETCH_assoc()){
	//foreach($row as $v){
		echo "<span> <a href='f?=$v[func_id]'>".$v[func_name]."</a> </span>";	
	//}
}
echo "</div>";

//var_dump($rows);


}

?>
