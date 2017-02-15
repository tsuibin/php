<?php
session_start();
header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>
<script>
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			document.getElementById("msg").innerHTML=t;
		}
	}
}

function loadpage(page)
{
	http_request=loadajax("pagec.php?page="+page);
}
loadpage(1);
</script>
<div id="msg"></div>

<a href="#" onclick="loadpage(1);">首页</a>
<a href="#" onclick="loadpage(2);">1</a>
<a href="#" onclick="loadpage(3);">2</a>
<a href="#" onclick="loadpage('<?php echo $pagecount;?>');">4</a>