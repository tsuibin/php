<?php /* Smarty version 2.6.18, created on 2008-11-23 20:32:33
         compiled from rand.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="include/css/css_babel.css">
<style type="text/css">
body, html { background: #000 no-repeat 50% 0; }
</style>
<link rel="stylesheet" type="text/css" href="include/css/css_extra.css">
<link rel="stylesheet" type="text/css" href="include/css/css_zen.css">
<link rel="stylesheet" type="text/css" href="include/css/lightbox.css" media="screen">
<body style="background-color: #333333">
<style>
#nav{
	position:absolute;
	top:10px;
	right:5px;}
a{text-decoration:none;
color:#CCC;}
#hr{
	position:relative;
	top:10px;}
</style>

<title>无标题文档</title>
</head>
<body>

<?php echo $this->_tpl_vars['div1']; ?>


<?php $_from = $this->_tpl_vars['echoarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item1']):
?>
<?php echo $this->_tpl_vars['item1']; ?>

<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_tpl_vars['div2']; ?>


</body>
</html>