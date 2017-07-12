<?php
//      $conn=mysql_connect("localhost:3306","root","") or die("数据库服务器连接错误".mysql_error());
//      mysql_select_db("db_shop",$conn) or die("数据库访问错误".mysql_error());
     $conn = mysqli_connect(
     		'localhost:3306', /* The host to connect to 连接MySQL地址 */
     		'root',   /* The user to connect as 连接MySQL用户名 */
     		'', /* The password to use 连接MySQL密码 */
     		'db_shop_one');  /* The default database to query 连接数据库名称*/
     
     if (!$conn) {
     	printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
     	exit;
     }
  	 mysqli_query($conn,"set character set gb2312");
     mysqli_query($conn,"set names gb2312");
?>
