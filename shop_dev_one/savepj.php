<?php
include("conn/conn.php");
$title=$_POST['title'];
$content=$_POST['content'];
$spid=$_GET['id'];
$time=date("Y-m-j");
session_start();
$sql=mysqli_query("select * from tb_user where name='".$_SESSION['username']."'",$conn);
$info=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$userid=$info['id'];
mysqli_query($conn,"insert into tb_pingjia (userid,spid,title,content,time) values ('$userid','$spid','$title','$content','$time') ");
echo "<script>alert('评论发表成功!');history.back();</script>";
?>