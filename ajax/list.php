<?php
header("Content_Type:text/html;charset=utf8");
?>
<script type="text/javascript" src="ajax.js"></script>

<script>
var mtype;
function process()
{
	if(http_request.readyState==4)
	{
		if(http_request.status==200)
		{
			t=http_request.responseText;
			document.getElementById(mtype).innerHTML=t;
		}
	}
}
var flg=true;
function requestlist(type){
	mtype=type;
	if(flg)
	{
		http_request=loadajax("data.php?type="+type);
		document.getElementById(mtype).style.display="";
		flg=false;
	}
	else
	{
		document.getElementById(mtype).style.display="none";//innerHTML="";
		flg=true;
	}
}

</script>


<ul>
	<li><a href="#" onclick="requestlist('new');">新闻</a><!-- 用参数来决定菜单内容 -->
		<div id="new"></div>
		
	</li>
	<li><a href="#" onclick="requestlist('sport');">体育</a>
		<div id="sport"></div>
	</li>
	<li><a href="#" onclick="requestlist('play');">音乐</a>
		<div id="play"></div>
	</li>
	<li><a href="#" onclick="requestlist('basket');">篮球</a>
		<div id="basket"></div>
	</li>
	<li><a href="#" onclick="requestlist('football');">足球</a>
		<div id="football"></div>
	</li>
</ul>


<!-- <ul><li></li><li></li></ul> -->