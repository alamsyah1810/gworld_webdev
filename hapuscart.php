
<?php
session_start();
$id = $_SESSION['id'];
include("config_onlline.php");

    $query = "DELETE FROM cart WHERE id_cart = $id";
    $sql = mysqli_query ($con, $query) or die(mysqli_error($con));
    header("location: keranjang.php");
?>