<?php 
	$books[0]=array("title"=>"PHP��������","author"=>"����","price"=>94.3);
	$books[1]=array("title"=>"CSS�ֲ�","author"=>"alex","price"=>24.3);
	$books[2]=array("title"=>"PHPʥ��","author"=>"����","price"=>55);
	$books[3]=array("title"=>"LAMPָ��","author"=>"kate","price"=>83.2);
?>


<table border="1">
<tr><th>����</th><th>����</th><th>��Ǯ</th><th>ִ��</th></tr>
<tr><td>PHP��������</td><td>����</td><td>94.3</td><td><a href="#">�༭</a> | <a href="#">ɾ��</a></td></tr>
<tr><td>CSS�ֲ�</td><td>alex</td><td>94.3</td><td><a href="#">�༭</a> | <a href="#">ɾ��</a></td></tr>
</table>


�༭ͼ��
<form action="book.php" method="post">
������<input type="text" name="title" value="PHP��������" /><br />
���ߣ�<input type="text" name="author" /><br />
��Ǯ��<input type="text" name="price" /><br />
<input type="submit" value="����" />
</form>