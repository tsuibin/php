<?php

$ran=rand(1111,9999);

?>

<form action="session_check.php" method="post">
username:<input type="text" name="username" /><br />
checknum:<input type="text" name="checknum" value="<?php echo $ran;?>" /><br />
<input type="hidden" name="hcheck" value="<?php echo $ran;?>"/>
<input type="submit" value="login" />
</form>
