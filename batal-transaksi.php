<?php

session_start();
include("config_onlline.php");
$query=mysqli_query($con,"select * from transksi where id_temp_user='$_SESSION[sid]'");
$exe1=mysqli_fetch_assoc($query);

$update=mysqli_query($con,"update transksi set id_statusvoucher = 4 where id_temp_user='$_SESSION[sid]'");
$exeupdate=mysqli_fetch_assoc($update);

$update2=mysqli_query($con,"update cart set `delete` = 1 where id_temp_user='$_SESSION[sid]'");
$exeupdate2=mysqli_fetch_assoc($update2);


header("Location: index.php");


?>