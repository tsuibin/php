<?php /* Smarty version 2.6.18, created on 2008-11-24 17:29:22
         compiled from function.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table border="1px">
<?php $_from = $this->_tpl_vars['r']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['item1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item2']):
?>
	<td>
	<?php echo $this->_tpl_vars['item2']; ?>

	</td>
	<?php endforeach; endif; unset($_from); ?>
</tr>

<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>