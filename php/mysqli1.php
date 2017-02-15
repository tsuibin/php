<php
	$con=new mysqli("localhost","root","root","mybook");
	if(mysqli_connect_errno())
	{
			die("数据库连接失败");
	}
	$sql="select * from books";
	$con->query("set names utf8");
	$rs=$con->query($sql) or die($con->error);
	$num=$rs->num_rows;
	echo $num;//查询影响了多少行
	if($num>0)
	{
			while($row=$rs->fetch_row()) //fetch_assoc fetch_array fetch_object
			//MYSQL_NUM MYSQL_ASSOC MYSQL_BOTH
			{
				print_r($row);
				echo "<br />";
			}
	}
	
	
	
	
?>