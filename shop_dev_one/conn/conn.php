<?php
//      $conn=mysql_connect("localhost:3306","root","") or die("���ݿ���������Ӵ���".mysql_error());
//      mysql_select_db("db_shop",$conn) or die("���ݿ���ʴ���".mysql_error());
     $conn = mysqli_connect(
     		'localhost:3306', /* The host to connect to ����MySQL��ַ */
     		'root',   /* The user to connect as ����MySQL�û��� */
     		'', /* The password to use ����MySQL���� */
     		'db_shop_one');  /* The default database to query �������ݿ�����*/
     
     if (!$conn) {
     	printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
     	exit;
     }
  	 mysqli_query($conn,"set character set gb2312");
     mysqli_query($conn,"set names gb2312");
?>
