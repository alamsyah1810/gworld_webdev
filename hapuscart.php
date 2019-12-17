<?php
session_start();
include("config_onlline.php");

$query11=mysqli_query($con,"SELECT count(id_cart) as'aa' FROM `cart`");
$hasil11=mysqli_fetch_assoc($query11);

$update=mysqli_query($con,"update cart set `delete`=1 where id_cart='$hasil11[aa]'");


header("Location: keranjang.php");

?>