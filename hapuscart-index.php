<?php
session_start();
include("config_onlline.php");

/*if(isset($_SESSION['nama'])){
    $home=$_SESSION['nama'];
  
  }else{
      $home=$_SESSION['sid']
  }
*/
  if (isset($_SESSION['nama'])) {
    $queryiduser=mysqli_query($con,"SELECT id_user, nama_user FROM `user` u where nama_user='$_SESSION[nama]'");
    $cariiduser=mysqli_fetch_assoc($queryiduser);
    
    $query=mysqli_query($con,"SELECT id_cart,nama_game,nominal_voucher,harga_voucher,id_player,email_player,gambar FROM cart c,game g,voucher v ,`user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and `delete`= 0 and c.id_user='$cariiduser[id_user]' ");
  } else {
    $query=mysqli_query($con," SELECT id_cart,nama_game,nominal_voucher,harga_voucher,id_player,email_player,gambar FROM cart c,game g,voucher v  WHERE c.id_voucher=v.id_voucher and `delete`= 0 and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]'");
  }
  



$query11=mysqli_query($con,"SELECT *  FROM `cart` where id_user='$cariiduser[id_user]'");
$hasil11=mysqli_fetch_assoc($query11);

$update=mysqli_query($con,"update cart set `delete`=1 where id_user='$hasil11[id_user]'");


header("Location: index.php");

?>