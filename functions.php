<?php

session_start();
include("config_onlline.php");

function query($query) {
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];

    while ($row=mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}

function hapus($id_cart) {
    global $conn;
    mysqli_query($conn, "delete * from cart where id_cart = '$id_cart';");

    return mysqli_affected_rows($conn);
}

?>