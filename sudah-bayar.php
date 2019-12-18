<?php

session_start();
include("config_onlline.php");

$query=mysqli_query($con,"select * from transksi where id_temp_user='$_SESSION[sid]'");
$exe1=mysqli_fetch_assoc($query);

$update=mysqli_query($con,"update transksi set id_statusvoucher = 2 where id_temp_user='$_SESSION[sid]'");
$exeupdate=mysqli_fetch_assoc($update);

$update2=mysqli_query($con,"update cart set `delete` = 1 where id_temp_user='$_SESSION[sid]'");
$exeupdate2=mysqli_fetch_assoc($update2);

$voucher=mysqli_query($con,"SELECT id_hash FROM detail_voucher d, cart c WHERE d.id_voucher=c.id_voucher and c.id_temp_user='$_SESSION[sid]'");
$exevoucher=mysqli_fetch_assoc($voucher);



//$update3=



if(isset($_SESSION['nama'])){
    $home=$_SESSION['nama'];
  
    
  }else{}
/*
$query=mysqli_query($con,"SELECT FROM `cart`");
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='css/bootstrap.min.css'>
    <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima Kasih</title>
</head>


<style>
    body {
      background-color: rgb(255, 136, 0);
      color: white;
    }

    .container-fluid {
      padding: 3px 15px;
    }

    .navbar {
      margin-bottom: 0;
      z-index: 9999;
      border: 0;
      font-size: 14px;
      line-height: 1.42857143;
      letter-spacing: 2px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
      opacity: 0.9;
    }

    .bg-putih {
      width: 35%;
      top: 85px;
      border-radius: 0px 0px 10px 10px;
      left: 34%;
      height: 290px;
      background-color: white;
      position: relative;
      border: 1px solid #B0C4DE;
    }

    .header {
      width: 35%;
      margin: 50px auto 0px;
      left: 22px;
      color: white;
      background: black;
      opacity: 0.7;
      text-align: center;
      border: 0px solid #B0C4DE;
      border-bottom: none;
      border-radius: 10px 10px 0px 0px;
      padding: 15px;
      position: relative;
      top: 90px;
    }

    .makasih {
        color: black;
        position: relative;
        text-align: center;
        font-size: 16px;
        top: 35px;
    }

    .berikut {
        color: black;
        position: relative;
        text-align: center;
        font-size: 17px;
        font-weight: bold;
        top: 35px;
    }

    .putih {
      background-color: white;
      box-shadow: 1px 2px 3px gray;
      border-radius: 6px;
      top: 50px;
      left: 85px;
      height: 40px;
      width: 65%;
      position: relative;
    }

    .hash {
        color: black;
        position: relative;
        text-align:center;
        font-weight: bold;
        font-size : 18px;
        letter-spacing: 4px;
        top: 5px;
    }

    .index {
        width: 22%;
      position: relative;
      background-color: black;
      height: 50px;
      opacity: 0.8;
      top: 70px;
      border-radius: 6px;
      font-size: 12px;
      left: 195px;
      color: white;
    }

    .notes {
      color: black;
      position: relative;
      font-size: 10px;
      top: 65px;
      text-align: center;
    }

  </style>



<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">GamingWorld</a>
      </div>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['nama'])){?>
        <div class="dropdown">
          <button
            style="background-color: inherit;border: 0px;position: relative;margin-top: 10px;margin-left: 10px; right: 10px; font-family: inherit;"
            class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> <?php echo $home?></a></li>
            <i class="fa fa-caret-down"></i>
          </button>
          <ul class="dropdown-menu">
            <li><a href="akun.php">Account Settings</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div>

        <?php }else{  ?>

        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>

        <?php };?>

      </ul>
     
    </div>
  </nav>





  <div class="header">
    <h2>Terima Kasih</h2>
  </div>

  <div class="bg-putih">
    <p class="makasih">Terima kasih sudah berbelanja bersama Gaming World !<p>
    <p class="berikut">Berikut kode anda untuk mendapat voucher game kesayangan anda</p>
    <div class="putih">
        <p class="hash"><?php echo $exevoucher['id_hash']?></p>
      </div>

    <p class="notes">*untuk game top up voucher langsung dikirimkan ke ID Game</p>
      <a href="kembali-keindex.php">
      <button class="index" type="button">Index</button>
      </a>
  </div>


</body>
</html>