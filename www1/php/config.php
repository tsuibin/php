<?php
	function consql()
	{
		@$con=new mysqli("localhost","root","root","cx");
		@$con->query("set names utf8");
		return $con;
	}
	

?>
