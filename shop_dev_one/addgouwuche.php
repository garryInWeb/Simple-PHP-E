<?php
session_start();
header("Content-type: text/html; charset=gb2312");
include("conn/conn.php");
if(!isset($_SESSION['username'])){
  echo "<script>alert('请先登录后购物!');history.back();</script>"; 
  exit;
 }
$id=strval($_GET['id']);
$sql=mysqli_query($conn,"select * from tb_shangpin where id='".$id."'"); 
$info=mysqli_fetch_array($sql,MYSQLI_ASSOC);
if($info['shuliang']<=0){
   echo "<script>alert('该商品已经售完!');history.back();</script>";
   exit;
 }
  $array=explode("@",$_SESSION['producelist']);
  for($i=0;$i<count($array)-1;$i++){
	 if($array[$i]==$id){
	     echo "<script>alert('该商品已经在您的购物车中!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION['producelist']=$_SESSION['producelist'].$id."@";
  $_SESSION['quatity']=$_SESSION['quatity']."1@";
  header("location:gouwu1.php");
?> 