<?php 
	//11．输出“<a href=”a.php”>进入</a>”该字符串在页面显示出来，而不是变成一个链接
	
	$str=<<<a
		<a href>="a.php">进入</a>
a;
	echo htmlspecialchars($str);
?>