<?php
header("Content-type: text/html; charset=gb2312");
 $nc=trim($_GET['nc']);
?>
<?php
 include("conn/conn.php");
?>
<html>
<head>
<title>
�ǳ����ü��
</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FADD33">
  <tr>
    <td height="50"><div align="center">
	
	<?php
	  if($nc=="")
	  {
	    echo "�������ǳ�!";
	  
	  }
	  else
	  {
	    $sql=mysqli_query($conn,"select * from tb_user where name='".$nc."'");  
	    $info=mysqli_fetch_array($sql,MYSQLI_ASSOC);
		if($info==true)
		{
		  echo "�Բ���,���ǳ��ѱ�ռ��!";
		}
		else
		{
		   echo "��ϲ,���ǳ�û��ռ��!";
		} 
	  }
	?>
	</div></td>
  </tr>
  <tr>
    <td height="50"><div align="center"><input type="button" value="ȷ��" class="buttoncss" onClick="window.close()"></div></td>
  </tr>
</table>
</body>