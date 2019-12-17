<?php
session_start();
include("config_onlline.php");
$email=$_POST['email'];
$id=$_POST['id'];


if (isset($_SESSION['nama'])) {
    $queryiduser=mysqli_query($con,"SELECT id_user, nama_user FROM `user` u where nama_user='$_SESSION[nama]'");
    $cariiduser=mysqli_fetch_assoc($queryiduser);
    
    $query=mysqli_query($con,"SELECT * FROM cart WHERE id_user='$cariiduser[id_user]' ORDER BY id_cart DESC LIMIT 1;");
  } else {
    $query=mysqli_query($con," SELECT * FROM cart WHERE id_temp_user='$_SESSION[sid]' ORDER BY id_cart DESC LIMIT 1;");
  }
  


/*$query11=mysqli_query($con,"SELECT count(id_cart) as'aa' FROM `cart`")*/
$hasil11=mysqli_fetch_assoc($query);

$update=mysqli_query($con,"update cart set email_player='$email' where id_cart='$hasil11[id_cart]'");
header("Location: checkout.php");
unset($_SESSION['barang dipilih']);
?>