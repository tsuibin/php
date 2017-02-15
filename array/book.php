<?php 
	$books[0]=array("title"=>"PHP开发宝典","author"=>"张三","price"=>94.3);
	$books[1]=array("title"=>"CSS手册","author"=>"alex","price"=>24.3);
	$books[2]=array("title"=>"PHP圣经","author"=>"王五","price"=>55);
	$books[3]=array("title"=>"LAMP指南","author"=>"kate","price"=>83.2);
?>


<table border="1">
<tr><th>书名</th><th>作者</th><th>价钱</th><th>执行</th></tr>
<tr><td>PHP开发宝典</td><td>张三</td><td>94.3</td><td><a href="#">编辑</a> | <a href="#">删除</a></td></tr>
<tr><td>CSS手册</td><td>alex</td><td>94.3</td><td><a href="#">编辑</a> | <a href="#">删除</a></td></tr>
</table>


编辑图书
<form action="book.php" method="post">
书名：<input type="text" name="title" value="PHP开发宝典" /><br />
作者：<input type="text" name="author" /><br />
价钱：<input type="text" name="price" /><br />
<input type="submit" value="保存" />
</form>