<?php	
	header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>
<script>
	//http_request=loadajax("page1.php");//初始化成功
	function selectchange(add)
	{
		http_request=loadajax('d.php?where=hk');
	}
	function process()
	{
		if(http_request.readyState==4)
		{
			if(http_request.status==200)
			{
				t=http_request.responseText;
				//alert(t);
				document.getElementById("main").innerHTML=t;
			}
		}
	}
	</script>
<form action="d.php?where=" method="GET" >
Where you want come ?
<select name="where" size="5" onchange="selectchange();">
	<option value="hk">Hong Kong</option>
	<option value="tw" selected>Taiwan</option>
	<option value="cn">China</option>
	<option value="us">United States</option>
	<option value="ca">Canada</option>
</select>
<input type="Submit">
</form>
<div id="main"></div>

<!-- 
多选的name使用数组
where[aaa];
<select name="sel" onchange="testName(1,this.value;)">
	<option>beijing</option>
	<option>shanghai</option>
	<option>wuhan</option>
	<option>changsha</option>
	<option>xianggang</option>
	<option>aomen</option>
</select>
<div id="bj"></div>
<div id="sh"></div>
<div id="wh"></div>
<div id="cs"></div>
<div id="xg"></div>
<div id="am"></div>

 -->