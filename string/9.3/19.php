<!--
19��������HTML�����ַ���ԭ�����
<table border=��1�� align=��center��>
	<tr><td>hello</td></tr>
	<tr><td>world</td></tr>
</table>
-->

<?php 
	$str=<<<body
<table border="1" align="center">
	<tr><td>hello</td></tr>
	<tr><td>world</td></tr>
</table>
body;
	echo"<pre>";
	echo htmlspecialchars($str);
	echo"</pre>";
?>