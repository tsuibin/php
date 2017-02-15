<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<h2>完成以下功能</h2>
<a href="book.php">浏览图书,以表格的形式显示所有图书，要有标题和编号</a>
<hr />
添加图书
<form action="book.php" method="post">
书名：<input type="text" name="title" /><br />
作者：<input type="text" name="author" /><br />
价钱：<input type="text" name="price" /><br />
<input type="submit" value="添加" />
</form>
<hr />
查找图书,关键字描红显示
<form action="book.php" method="post">
请输入关键字<input type="text" name="key" /><br />
请选择查询类型<input type="radio" name="type" value="title" checked />书名
			<input type="radio" name="type" value="author" />作者
<input type="submit" value="查找" />
</form>
<hr />
删除图书:直接在图书后面点击删除按钮进行操作，删除前要询问是否删除，点击确定时，才进行删除
<hr />
编辑图书：直接在图书后面点击编辑按钮进行操作，编辑要显示一个编辑表单
<hr />
</body>
</html>
