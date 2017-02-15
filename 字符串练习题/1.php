<style type="text/css">
<!--
/*
a.demo{padding:8px;width:65px;text-decoration:none;color:#000000;}
a.demo:hover{background:#FFC080;color:#000000;}
a.demo:active{background:#CCCFFF;color:#000000;}
a.demo:visited{background:#FF3300;color:#000000;} */
  .aa   
  {   background-color:#0000ff;   color:#ff0000;filter:   alpha(opacity=50)}   
  .bb     
  {   background-color:#3366cc;   color:#ffffff}   
  .cc  {   background-color:red;   color:#ffffff}  
  .dd  {   background-color:green;   color:#ffffff}    
tr.one{background:blue;}
/*tr.one:hover{background:pink;} */

tr.two{background:green;}
/* tr.two:hover{background:red;}*/

-->
</style>


<?php/*
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
	$d=$i*$j;
	echo "$j x $i = "."$d &nbsp;";
	}
	echo "&nbsp;<br>";

}

*/?>
<?php
echo "<div><table border='2'>";
for($i=1;$i<=9;$i++){
	if($i%2==1){
		echo "<tr class=dd onmouseover=this.className='aa'   onmouseout=this.className='dd' >";
	}else{
		echo "<tr class=cc onmouseover=this.className='aa'   onmouseout=this.className='cc' >";
	}
	for($j=1;$j<=$i;$j++){
	 //echo "<td><a class=demo href='#' onclick='return false;'>{$i}*{$j}=".($i*$j)."</a></td>";
	 //echo "<td><a class=demo href='#' onclick='return false;'>{$i}*{$j}=".($i*$j)."</a></td>";
	 echo "<td>{$i}*{$j}=".($i*$j)."</td>";
	}
	echo "</tr>";
}
echo "</table></div>";
?>