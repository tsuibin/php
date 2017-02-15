<?php 

$uname=$_REQUEST['name'];
$uemail=$_REQUEST['email'];


if(!empty($uname) || !empty($uemail))
{

	setcookie("cname","$uname",time()+100000);
	setcookie("cemail","$uemail",time()+100000);
	echo "1111";
}

$uname=$_COOKIE['cname'];
$uemail=$_COOKIE['cemail'];


?>
<form action="ex2.php" method="post">

name:<input type="text" name="name" value="<?php echo $uname;?>"><br />
email:<input type="text" name="email" value="<?php echo $uemail;?>"><br />

<input type="submit" value="submit">
</form>
