
<head>
<style type="text/css">
.style1 {
	border-style: solid;
	border-width: 1px;
	width:600px;

}
</style>
</head>

<div align="center"><p>MSG</p></div>
<hr align="center" width="200">
<div align="center">GuestBook</div>

<table align="center" class="style1">
	<tr>
		<td width="92">Name</td>
		<td>
		<form method="post" action="m1.php" enctype="multipart/form-data" /><input
			type="text" name="name" />
		
		</td>
	</tr>
	<tr>
		<td>Title</td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td>MSG</td>
		<td><textarea name="msg"></textarea></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> <input
			type="file" name="file"></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<div align="right"><input type="submit" value="submit" />
		</form>
		
		</td>
	</tr>
</table>

<?php
	//读取数据
	$str=file_get_contents("msg.inc");

	//从文件中分割出每一条数据
	$arr=explode('@@',$str);

	//过滤空数组
	function fil($value)
	{
		return(!empty($value));
	}
	$arr=array_filter($arr, "fil");

	//计算有多少条数据
	$msgcounts=count($arr);

	//输出消息 受function viewnum($ps)影响
	function viewmsg($i){
		global $arr;
		foreach($arr as $key=>$value)
		{
			$amsg=explode('	',$value);
			$m[$key]=array($amsg[0],$amsg[1],$amsg[2],$amsg[3],$amsg[4]);

		}


		echo "<table align='center' class='style1' >";

		if(!empty($m[$i][1]))
		{
			$t=$m[$i][3];
			$m[$i][3]=date("Y年m月d日h时i分s秒",$t);
			echo "<tr><td>第 $i 条</td></tr>";
			echo "<tr><td>Name:".$m[$i][0]."</td></tr>";
			echo "<tr><td>Title:".$m[$i][1]."</td></tr>";
			echo "<tr><td>Message:".$m[$i][2]."</td></tr>";
			echo "<tr><td>Time:".$m[$i][3]."</td></tr>";
			echo "<tr><td>Image:".'<img src="'."{$m[$i][4]}".'"></td></tr>';
			echo "</table>";
		}
		else
		{
			echo "";
		}

	}


	//处理消息于分页
	$ps=11;
	$page=$_REQUEST['p'];
	if($page<=0)
	{
	$page=1;
	}

	$max=$page*$ps;
	$i=$max-$ps;



	//输出信息数量

	function viewnum($ps)
	{
		global $i,$max,$msgcounts;

		for($i;$i<$max;$i++)
		{
			if($i<=$msgcounts)
			{
				viewmsg($i);
			}
			else
			{
				echo "";
			}
		}

	}
viewnum($ps);
//新的分页处理机制
/*
  总页数=总消息数/页显示消息数

*/
	$pmsg=10;
	$pages=ceil($msgcounts/$pmsg);
	$maxpage=$pages;
	$minpage=1;
	$pagearr;
	for($i=0;$i<$maxpage;$i++)
	{
		$i+=1;
		$pagearr[].=$i;
		$i-=1;
	}
	$getpage;
	$getpage=$_REQUEST['p'];
	if($getpage==0)
	{
		$getpage=1;
	}
	$thisp;
	$nnpage;
	$nppage;
	//var_dump($pagearr);
	if(in_array($getpage,$pagearr))
	{
		$thisp=$getpage;
		if($getpage==$maxpage)
		{
			$nnpage=$maxpage;
			$nnp="<a>下一页 </a>";
		}
		else
		{
			$nnpage=$getpage+1;
			$nnp="<a href='?p={$nnpage}'>下一页 </a>";
		}
		if($getpage==$minpage)
		{
			$nppage=$minpage;
			$npp="<a>上一页 </a>";
		}
		else
		{
			$nppage=$getpage-1;
			$npp="<a href='?p={$nppage}'>上一页 </a>";
		}
	}
	else
	{
		echo "<script>alert('page error!');</script>";
	}
?>
<div align="center">
<?php
echo $npp;
echo "第{$thisp}页 ";
echo $nnp;
echo "总共{$maxpage}页 共{$msgcounts}条消息 每页显示{$pmsg}条";
?>
</div>

<?php




//处理分页
/*	$ps=$ps-1;
	$pages=ceil($msgcounts/$ps);
	$ppage=$page-1;
	if($ppage<0)
	{
		$ppage=1;
	}
	$npage=$page+1;
	if($npage>$pages+1)
	{
		$npage=$pages;
		$ppage=1;
		echo "你访问的页面不存在<br>";
	}

	function footer()
	{
		global $ppage,$page,$pages,$npage,$msgcounts,$ps;



		echo "<a href='v.php?p=".$ppage."'>  <<  </a> ";
		echo " $page   ";
		echo "<a href='v.php?p=".$npage."'>  >>  </a>  ";
		echo "总共 $pages 页";
		echo "$msgcounts 条消息  ";
		echo " 每页显示 $ps 条  ";
	}
	function say()
	{
		echo "<br>看完之后有话想说？那就帮楼主加盖一层吧！<br><br>";
	}

say();
footer();
*/
?>
