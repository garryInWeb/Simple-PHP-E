<?php
session_start();
include("conn/conn.php");
$name=$_POST['usernc'];
$pwd1=$_POST['p1'];
$pwd=md5($_POST['p1']);
$email=$_POST['email'];
$truename=$_POST['truename'];
$sfzh=$_POST['sfzh'];
$tel=$_POST['tel'];
$qq=$_POST['qq'];
if($_POST['ts1']==1)
  {
  $tishi=$_POST['ts2'];
  }
else 
 {
 $tishi=$_POST['ts1'];
 } 
$huida=$_POST['tsda'];
$dizhi=$_POST['dizhi'];
$youbian=$_POST['yb'];
$regtime=date("Y-m-j");
$dongjie=0;
$sql=mysqli_query($conn,"select * from tb_user where name='".$name."'");
$info=mysqli_fetch_array($sql,MYSQLI_ASSOC);
if($info==true)
 {
   echo "<script>alert('���ǳ��Ѿ�����!');history.back();</script>";
   exit;
 }
 else
 {  
    mysqli_query($conn,"insert into tb_user (name,pwd,dongjie,email,truename,sfzh,tel,qq,tishi,huida,dizhi,youbian,regtime,pwd1) values ('$name','$pwd','$dongjie','$email','$truename','$sfzh','$tel','$qq','$tishi','$huida','$dizhi','$youbian','$regtime','$pwd1')");
    $_SESSION["username"]=$name;
// 	session_register("username");
// 	$username=;
     $_SESSION["producelist"]="";
//         session_register("producelist");
// 	$producelist="";
     $_SESSION["quatity"]="";
// 	session_register("quatity");
// 	$quatity="";
    echo "<script>alert('��ϲ��ע��ɹ�!');window.location='index.php';</script>";
 }
?>
