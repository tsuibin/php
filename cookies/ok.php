<?php
print_r($_POST);
$checknum=$_POST['checknum'];
$hcheck=$_POST['hcheck'];

if(!empty($checknum) && $checknum==$hcheck)
{
	echo "ok!";
}
else
{
	echo "false";
}
?>