<?php
 session_start();
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uni Search</title>
<?php
$_SESSION["allowLoadJs"]=true;
?>
<script src="savejs.php"></script>
</head>
<?php
$_SESSION['key']=$_GET['key'];
?>
<body>
<div align='center'>
<form action="dosearch.php" method="get">

<input type="text" name="key" id='searchtext' onpropertychange="firefox();" oninput="ie();" autocomplete='off' value="<?php echo $_SESSION['key']; ?>" size="55" maxlength="2048" />

<!---->
<input type="button" value="Uni Search" onClick="doo();"  />
</form>
</div>
<!--<div id="aa" align='center'></div>-->

<div id="msg" align='center'></div>
</body>
</html>