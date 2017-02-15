<?php 
	session_start();
	extract($_REQUEST);
	$con=new mysqli("localhost","root","root","user");
	//var_dump($con);
	$con->query("set names utf8");
	$sql="select * from func_user1 where u_name='{$name}'";
	//echo $sql;
	$rs=$con->query($sql);
	
 	//if($rs->num_rows>0){
			$info=$rs->fetch_assoc();
			
			//var_dump($info);
	 if($info==null){	//echo $password;
		echo "<script>alert('此用户名没有注册，请先注册');window.location='zc.php';</script>";
		}
		
		if($info["u_password"]!==$password){
			echo "<script>alert( '密码输入有误，请确认 你的密码');window.location='denglu.php';</script>";
			
		}else{
			$_SESSION["uname"]=$name;
			echo "<h1>".$_SESSION["uname"]."您好"."</h1>";
		}
		 
	//}
	
	 

?>
<a href="guanli.php">用户管理</a>
<a href="edit.php?id=<?php echo $info['u_id'];?>">修改</a>
