<?php
include("config_onlline.php");

$id=mysqli_query($con,"SELECT count(nama_user)+1 as 'aa' from `user` ");
$tampung=mysqli_fetch_assoc($id);

$idbaru="u".$tampung["aa"];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

 
$query = mysqli_query($con,"insert into `user` values('$idbaru','$password','$username','$email','$nohp','1','0');");

header("Location: Web prototype navbar.php");
?>
<html>

<head>xxx</head>
<body>
    <h1>ccccc</h1>
</body>
</html>