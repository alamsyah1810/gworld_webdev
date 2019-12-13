<?php

$base_url   = "http://jmswijaya.com/phpmyadmin/";
$servername = "jmswijaya.com";
$username   = "isb18";
$password   = "Isb_2018";
$dbname     = "store18_5";

$con = mysqli_connect($servername, $username, $password, $dbname);

function query($query) {
    global $con;
    $result=mysqli_query($con,$query);
    $rows=[];

    while ($row=mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}


function hapus($id) {
    global $con;
    mysqli_query($con,"delete from cart where id_cart = $id");

    return mysqli_affected_rows($con);
}



?>