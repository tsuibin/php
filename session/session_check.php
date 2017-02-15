<?php
// print_r($_POST);
$session_start = session_start ();
$checknum = $_POST ['checknum'];
$hcheck = $_POST ['hcheck'];
if (preg_match ( "/{$hcheck}/i", $checknum )) {
	echo "验证码正确";
} else {
	echo "验证码错误";
}
?>