
<script type="text/javascript">
	function fun1(){
		return confirm('确定要删除吗？');
	}
</script>
<?php 
	//session_start();
	//$name=$_SESSION["uname"];
	extract($_REQUEST);
	$id=$_GET["id"];
	$con=new mysqli("localhost","root","root","user");
	//var_dump($con);
	$con->query("set names utf8");
	$sql="select * from func_user1";
	//echo $sql;
	$rs=$con->query($sql);
	//var_dump($rs);
 	if($rs->num_rows>0){
			echo "<form action='#' method='post' onsubmit='return fun1();'><table border='0' bgcolor='#eeeeee'>";
			
			//foreach($info=$rs->fetch_assoc())
			echo "<tr>";
					echo "<td>&nbsp;</td><td>姓名</td><td>电话</td><td>email</td><td>性别</td><td>QQ</td></tr>";
			 while ($row = $rs->fetch_assoc()){

				//echo $row["u_name"];
				echo "<tr>";
					echo "<td><input type=checkbox name='fu[".$row['u_id']."]' value='".$row['u_id']."'></td>";
					echo "<td>";
						echo "<a href='guanli1.php?u_id=".$row["u_id"]."'>".$row["u_name"]."</a>";
					echo "</td>";
/* 					echo "<td>";
						echo $row["u_password"];
					echo "</td>"; */
					echo "<td>";
						echo $row["tel"];
					echo "</td>";
					echo "<td>";
						echo $row["email"];
					echo "</td>";
					echo "<td>";
						if($row["six"]){
							echo "男";
						}else{
							echo "女";
						}
						//echo $row["six"];
					echo "</td>";
					echo "<td>";
						echo $row["qq"];
					echo "</td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='6'>";
			echo "<a href='#'>全选</a>";
			echo "<input type='submit' value='删除' onclack >";
			
			
		echo "</td></tr></table></form>";	
			
	}	
	$fu=$_POST["fu"];
	if(isset($fu)){
		$fu=implode(",",$fu);
	//print_r($fu);
	if($fu){
		$sqldel="delete from func_user1 where u_id in({$fu})";
		//echo $fu; 
		//echo $sqldel;
	 	//exit;
		$con->query($sqldel);
	}
	
		
			 mysqli_free_result($rs);


			mysqli_close($con);
	}/* else{
		echo "<script>alert('请选择要删除的！');</script>";
	} */
	
			

			



?>