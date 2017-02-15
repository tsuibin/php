<script src="/function/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script>
</script>
<link href="/function/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<div id="TabbedPanels1" class="TabbedPanels">
	<ul class="TabbedPanelsTabGroup">
		<li class="TabbedPanelsTab" tabindex="0">添加函数</li>
		<li class="TabbedPanelsTab" tabindex="0">管理函数</li>
		<li class="TabbedPanelsTab" tabindex="0">添加参数</li>
		<li class="TabbedPanelsTab" tabindex="0">管理参数</li>
		<li class="TabbedPanelsTab" tabindex="0">添加类型</li>
		<li class="TabbedPanelsTab" tabindex="0">管理类型</li>
		
	</ul>
	<div class="TabbedPanelsContentGroup">
		<div class="TabbedPanelsContent"><?php include_once "func_add.php"; ?></div>
		<div class="TabbedPanelsContent"><?php include_once "func_list.php"; ?></div>
		<div class="TabbedPanelsContent"><?php include_once "parameter_add.php"; ?></div>
		<div class="TabbedPanelsContent"><?php include_once "parameter_list.php"; ?></div>
		<div class="TabbedPanelsContent"><?php include_once "type_add.php"; ?></div>
		<div class="TabbedPanelsContent"><?php include_once "type_del.php"; ?></div>
	</div>
</div>
<p>&nbsp;</p>
<p>&nbsp; </p>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
