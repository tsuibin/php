<?php 
	$con=new mysqli("localhost","root","root","user");
	//var_dump($con);
	$con->query("set names utf8");
	$u_id=$_GET["u_id"];
	$sql="select * from func_user1 where u_id={$u_id}";
	//echo $sql;
	//echo $sql;
	$rs=$con->query($sql);

	
	//var_dump($rs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>�ޱ����ĵ�</title>

</head>

<body>
<div id="d1"  align="center"><font color="#00FF0" size="+3">�޸ĸ�����Ϣ</font></div>
<?php 
	$info=$rs->fetch_assoc();
	//var_dump($info);

	
?>
<div align="center">
<form id="form1" name="form1" method="post" action="xiugai1.php?id=<?php echo $u_id;?>">
  <table width="606" border="1" cellspacing="1" cellpadding="1">
    <tr>
      <td width="271"><div align="right"><font color="#FF0000">���</font></div></td>
      <td width="322"><label>
        <input type="text" name="textfield" value="<?php echo $info["u_id"] ?>" readonly/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right"><font color="#FF0000">�û�����</font></div></td>
      <td><label>
        <input type="text" name="textfield2" value="<?php echo $info["utype_uid"]?>" readonly/>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">�û���</div></td>
      <td><label>
        <input type="text" name="textfield3" value="<?php echo $info["u_name"]?>" /><!--readonly �������κε�����¼�����-->
      </label></td>
    </tr>
	<tr>
      <td><div align="right">����</div></td>
      <td><input type="text" name="textfield7" value="<?php echo $info["u_password"]?>"/></td>
    </tr>
    <tr>
      <td><div align="right">�绰</div></td>
      <td><input type="text" name="textfield4" value="<?php echo $info["tel"]?>"/></td>
    </tr>
    <tr>
      <td><div align="right">�Ա�</div></td>
      <td><input type="text" name="textfield5" value="<?php echo $info["six"]?>"/></td>
    </tr>
	
    <tr>
      <td><div align="right">email</div></td>
      <td><input type="text" name="textfield6" value="<?php echo $info["email"]?>"/></td>
    </tr>
    <tr>
      <td><div align="right">QQ</div></td>
      <td><input type="text" name="textfield8" value="<?php echo $info["qq"]?>"/></td>
    </tr>
	
    <tr>
      <td height="25" colspan="2" align="center"><label>
        <input type="submit" name="Submit" value="�޸�"  onclick=""/>
        <input type="reset" name="Submit2" value="����" />
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>
<div align="center" ><font size="+2" color="#FF0000">��ע���û��������Լ��޸ĺ�ɫ���ͣ�����Ķ�����ϵ����Ա</font></div>
<div align="center"><a href="#">��ϵ����Ա</a></div>
</body>
</html>
