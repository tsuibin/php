<?php
$id=$_GET['id'];
$db=new mysqli("localhost","root","root","mybook");
$db->query("set names utf8");
$sql="select * from books where id=?";
//id,title,name,description
$stmt=$db->prepare($sql) or die("false");


//$stmt->bind_param(); 

//$stmt->bind_param("is",$id=,$title=);
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->bind_result($a,$b,$c,$d,$e,$f,$g);

echo "<table border='2'>";
echo "<th>编号</th><th>作者</th><th>书名</th><th>价格</th><th>出版日期</th><th>描述</th><th>销售</th>";
while($stmt->fetch()){
	echo "<tr><td>$a</td>";
	echo "<td>$b</td>";
	echo "<td>$c</td>";
	echo "<td>$d</td>";
	echo "<td>$e</td>";
	echo "<td>$f</td>";
	echo "<td>$g</td></tr>";
	}
	
echo "</table>";
echo "<a href='javascript:history.go(-1);'><<< go Back</a>";
	$stmt->close();
	$db->close();
?>