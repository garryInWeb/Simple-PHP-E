<?php
session_start();
include("conn/conn.php");
$sql=mysqli_query($conn,"select * from tb_user where name='".$_SESSION['username']."'");
$info=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$dingdanhao=date("YmjHis").$info['id'];
$spc=$_SESSION['producelist'];
$slc= $_SESSION['quatity'];
$shouhuoren=$_POST['name2'];
$sex=$_POST['sex'];
$dizhi=$_POST['dz'];
$youbian=$_POST['yb'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$shff=$_POST['shff'];
$zfff=$_POST['zfff'];
if(trim($_POST['ly'])==""){
   $leaveword="";
 }
 else{
   $leaveword=$_POST['ly'];
 }
 $xiadanren=$_SESSION['username'];
 $time=date("Y-m-j H:i:s");
 $zt="未作任何处理";
 $total=$_SESSION['total'];
 mysqli_query($conn,"insert into tb_dingdan(dingdanhao,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,leaveword,time,xiadanren,zt,total) values ('$dingdanhao','$spc','$slc','$shouhuoren','$sex','$dizhi','$youbian','$tel','$email','$shff','$zfff','$leaveword','$time','$xiadanren','$zt','$total')"); 
 header("location:gouwu2.php?dingdanhao=$dingdanhao");
?>
