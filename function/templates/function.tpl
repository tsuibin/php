<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table border="1px">
<{foreach item=item1 from=$r}>
<tr>
	<{foreach item=item2 from=$item1}>
	<td>
	<{$item2}>
	</td>
	<{/foreach}>
</tr>

<{/foreach}>
</table>
</body>
</html>
