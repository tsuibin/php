<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ajax</title>
<script type="text/javascript" src="include/javascript/ajax.js"></script>
<script>


	function process(){
		if(http_request.readyState==4){
			if(http_request.status==200){
				t=http_request.responseText;
				document.getElementById("cked").innerHTML=t;
			}
		}
	}
//alert("aaaaaaaaaaaa");
	function check(){
		tt=document.getElementsByName("aaa[]");
		t=tt[0].value;
		//alert(t);
		if(name==""){
			//alert("请输入用户名");
			document.getElementById("cked").innerHTML="请输入函数名";
		}else{
			http_request=loadajax("fcheck.php?fname="+t);
		}
	}
</script>
</head>

<body>
<form>
1<input type="text" name="aaa[]" onchange="check();" />
2<input type="text" name="aaa[]" onchange="check();" />
3<input type="text" name="aaa[]" onchange="check();" />
<input type="submit" />
</form>
<div id="cked"></div>
</body>
</html>
<?php
$a="\"aaa\"";

function outsource($src)
		{
			$src=addslashes($src);
			return $src;
		}
$a=outsource($a);
echo $a;
?>