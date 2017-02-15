<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<link rel="stylesheet" type="text/css" href="./css_babel.css" />
<link rel="stylesheet" type="text/css" href="./css_extra.css" />
<link rel="stylesheet" type="text/css" href="./css_zen.css" />
<link rel="stylesheet" type="text/css" href="./lightbox.css" media="screen" />

<title>M</title>

<style type="text/css">
.style1 {
	border-style: solid;
	border-width: 1px;
}

</style>
</head>

<p>XX留言本</p>
<p>留言</p>
<table align="center" class="style1">
  <tr>
    <td width="92">您的姓名：</td>
    <td>
		<form method="post" action="m1.php" enctype="multipart/form-data" />
 <input type="text" name="name" />
 (20字符以内)
    </td>
  </tr>
  <tr>
    <td>您的标题：</td>
    <td><input type="text" name="title" />
    (40字符以内)</td>
  </tr>
  <tr>
    <td>您的内容(500字)：</td>
    <td><input type="textarea" name="message"/></td>
  </tr>
  <tr>
    <td>上传图片：</td>
    <td>
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
	<input type="file" name="upload"></td>
  </tr>
  <tr>
  <td></td>
  <td><div align="right">
    <input type="submit" value="发布" />
    </form></td>
  </tr>
</table>

<p>留言信息：</p>
