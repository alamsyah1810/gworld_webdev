<?php

session_start();
include("config_onlline.php");
$tampung=$_GET;
$query=mysqli_query($con,"SELECT count(id_cart)+1 as'aa' FROM `cart`");
//$query2=mysqli_query($con,"SELECT count(id_transksi)+1 as'tr' FROM `transksi`");

$user=mysqli_query($con,"SELECT id_user FROM `user` where nama_user='$_SESSION[nama]'");
$userid=mysqli_fetch_assoc($user);
$hasil=mysqli_fetch_assoc($query);
$inputcart=mysqli_query($con,"insert into cart values('$hasil[aa]','$userid[id_user]','$_SESSION[sid]','$tampung[voucher]','$tampung[nominal]','0','0','0')");
//$inputcart2=mysqli_query($con,"insert into transksi values('$hasil[aa]','$userid[id_user]','$_SESSION[sid]','$tampung[voucher]','$tampung[nominal]','0','0','0')");
$_SESSION['barang dipilih']=1;




header("Location: catalog-pubgm.php?jenis=$_SESSION[nama_game]");


?>