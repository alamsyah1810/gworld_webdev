<?php
session_start();
include("config_onlline.php");
$email=$_POST['email'];
$id=$_POST['id'];

$query11=mysqli_query($con,"SELECT count(id_cart) as'aa' FROM `cart`");
$hasil11=mysqli_fetch_assoc($query11);

$update=mysqli_query($con,"update cart set email_player='$email' where id_cart='$hasil11[aa]'");
header("Location: catalog-steam.php?jenis=$_SESSION[nama_game]");
unset($_SESSION['barang dipilih']);
?>