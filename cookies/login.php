<?php

$ran=rand(1111,9999);
preg_match("/{$hcheck}/i",$checknum);
?>

<form action="ok.php" method="post">
username:<input type="text" name="username" /><br />
checknum:<input type="text" name="checknum" /><?php echo $ran;?><br />
<input type="hidden" name="hcheck" value="<?php echo $ran;?>"/>
<input type="submit" value="login" />
</form>

