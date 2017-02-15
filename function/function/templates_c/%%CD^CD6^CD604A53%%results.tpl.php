<?php /* Smarty version 2.6.18, created on 2008-11-25 16:42:28
         compiled from results.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<div style='width:800px' class='blank'>

<?php $_from = $this->_tpl_vars['r']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
<?php echo $this->_tpl_vars['item1']; ?>

	<?php $_from = $this->_tpl_vars['item1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item2']):
?>
		<?php echo $this->_tpl_vars['item2']; ?>

	<?php endforeach; endif; unset($_from); ?>


<?php endforeach; endif; unset($_from); ?>

</div>

</body>
</html>