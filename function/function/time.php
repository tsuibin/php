<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>

<body>
  <script>   
  var   ds   =   0;   
  function   doo()   
  {   
      alert("doo");   
  }   
    
  function Clear()   
  {   
      if(ds)     
      {   
          clearTimeout(ds);     
          ds=0;   
      }   
  }   
  </script>   
 
 <!-- <a href="#" onmouseover="ds=setTimeout('doo()',1000);" onmouseout="Clear();">aaaaaaaa</a>  -->
<form>
	<input type="text"  oninput="ds=setTimeout('doo()',2000);" onkeydown="Clear();"/>
</form>


</html>