<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE2 {font-weight: bold; color: #663399;}
body {
	background-color: #666666;
}
.STYLE4 {font-weight: bold; color: #663399; }
-->
</style>
</head>

<body>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
    <p align="left"><span class="STYLE4">函数名称</span>:
      mysql_connect<br />
      <span class="STYLE2">函数类型</span>:
      数据库<br />
      <span class="STYLE2">函数基本说明/注释/</span><br />
    resource <strong>mysql_connect</strong> ( [string server [, string   username [, string password [, bool new_link [, int client_flags]]]]] )<br />如果成功则返回一个 MySQL 连接标识，失败则返回 <strong>FALSE</strong>。<br />
    <span class="STYLE2">函数原形/范例</span><br />
    <br />
    <strong>例子 1. MySQL 连接例子</strong></p>
    <table cellpadding="5" bgcolor="#e0e0e0" border="0">
      <tbody>
        <tr>
          <td>&lt;?php<br />
                
            $link   = mysql_connect(&quot;localhost&quot;, &quot;mysql_user&quot;, &quot;mysql_password&quot;)<br />
                    
            or   die(&quot;Could not connect: &quot; . mysql_error());<br />
                
            print (&quot;Connected   successfully&quot;);<br />
                
            mysql_close($link);<br />
            ?&gt; </td>
        </tr>
      </tbody>
    </table>
    <p align="left"><br />
      <br />
      <span class="STYLE2">返回类型</span>: 
      资源<br />
      <span class="STYLE2">适用PHP版本</span>: PHP 3, PHP 4, PHP 5<br />
      <span class="STYLE2"><br />
      常用指数</span>:1 2 3 4 5 <br />
      <span class="STYLE2">详细说明</span><br />
    <strong>mysql_connect()</strong> 建立一个到 MySQL   服务器的连接。当没有提供可选参数时使用以下默认值：server =   'localhost:3306'，username = 服务器进程所有者的用户名，password = 空密码。 </p>
    <p align="left">server 参数可以包括端口号。例如 &quot;hostname:port&quot;   或者是到本地套接字的路径，例如本机上的 &quot;:/path/to/socket&quot;。 </p>
    <div>
      <div align="left">
        <blockquote>&nbsp; </blockquote>
      </div>
      <blockquote><p align="left"><strong>注: </strong>无论指定 &quot;localhost&quot; 或者 &quot;localhost:port&quot; 作为 server，MySQL 客户端库将覆盖之并尝试连接到本地套接字（Windows 中的名字管道）。如果希望使用   TCP/IP 连接，用 &quot;127.0.0.1&quot; 替代 &quot;localhost&quot;。如果 MySQL 客户端库试图连接到错误的本地套接字，则应该在 PHP 配置中将   mysql.default_host 设为正确的路径并使 server 字段为空。 </p>
        <p align="left">&quot;:port&quot; 的支持是 PHP 3.0B4 起加入的。 </p>
        <p align="left">&quot;:/path/to/socket&quot; 的支持是 PHP 3.0.10 起加入的。 </p>
        <p align="left">可以在函数名前加上 <a href="language.operators.errorcontrol.html">@</a> 来抑制失败时产生的错误信息。 </p>
      </blockquote>
    </div>
    <p align="left">如果用同样的参数第二次调用 <strong>mysql_connect()</strong>，将不会建立新连接，而将返回已经打开的连接标识。参数   new_link 改变此行为并使 <strong>mysql_connect()</strong> 总是打开新的连接，甚至当 <strong>mysql_connect()</strong> 曾在前面被用同样的参数调用过。参数 client_flags   可以是以下常量的组合：MYSQL_CLIENT_COMPRESS，MYSQL_CLIENT_IGNORE_SPACE 或者   MYSQL_CLIENT_INTERACTIVE。 </p>
    <div>
      <div align="left">
        <blockquote>&nbsp; </blockquote>
      </div>
      <blockquote><p align="left"><strong>注: </strong>new_link 参数自 PHP 4.2.0 起可用。 </p>
        <p align="left">client_flags 参数自 PHP 4.3.0 起可用。 </p>
      </blockquote>
    </div>
    <p align="left">一旦脚本结束，到服务器的连接就会被关闭。除非之前已经调用了 <a href="function.mysql-close.html"><strong>mysql_close()</strong></a> 来关闭它。</p>
    <div align="left"><br />
      <span class="STYLE2">相关函数<br />
      <br />
      </textarea>
      </span>参见 <a href="function.mysql-pconnect.html"><strong>mysql_pconnect()</strong></a> 和 <a href="function.mysql-close.html"><strong>mysql_close()</strong></a><span class="STYLE2">。    </span>
    </div>
    <p align="left"><br />
    </p>
  </form>
</div>
<br />
<br />
用户例子<br />
</textarea>
</textarea>
</textarea>
&lt;?php<br />
$connect=mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;&quot;);<br />
mysql_select_db(&quot;md5&quot;,$connect);<br />
$num=&quot;9999999&quot;;<br />
for($i=0;$i&lt;=$num;$i++)<br />
{<br />
          
$pass=md5($i);<br />
        
$into=&quot;insert into truepassword (id,password)   values ('$i','$pass')&quot;;<br />
        
$resu=mysql_query($into,$connect);<br />
          
if($resu){<br />
                
echo &quot;输入&quot;.$i.&quot;成功&lt;br&gt;&quot;;<br />
        
}<br />
          
else{<br />
                
echo &quot;输入&quot;.$i.&quot;失败&lt;br&gt;&quot;;<br />
        
}<br />
}<br />
          
?&gt;<br />
<p></p>
</body>
</html>
