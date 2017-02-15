<?php
session_start();

if(empty($_SESSION['count']))
{
	 $_SESSION['count']=0;
}

 $_SESSION['count']++;



echo "the count value :". $_SESSION['count'];
