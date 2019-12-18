<?php

session_start();
include("config_onlline.php");

$cart=mysqli_query($con,"select * from cart where id_temp_user='$_SESSION[sid]'");
$cartassoc=mysqli_fetch_assoc($cart);

$queryiduser=mysqli_query($con,"SELECT id_user FROM `user` u where nama_user='$_SESSION[nama]'");
$iduser=mysqli_fetch_assoc($queryiduser);
$today=date("Y-m-d");
$harga=$cartassoc['total_harga'];
$id=$iduser['id_user'];
$pembayaran=$_GET['id_metodepembayaran'];
$temp=$_SESSION['sid'];
$a="insert into transksi (date, total_harga,id_user,id_metodepembayaran,no_rekening,id_temp_user,tambah_poin_user,kurangi_poin_user,sub_total_harga,id_statusvoucher) VALUES ('$today','$harga','$id','$pembayaran',0,'$temp',0,0,'$harga',3)";
$query=mysqli_query($con,$a);
$transaksi=mysqli_fetch_assoc($query);



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
    <title>Bayar</title>
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

    .bg-putih .text-bayar {
      color: black;
      position: relative;
      font-size: 16px;
      top: 35px;
      text-align: center;
    }

    .bg-putih .nomor-pembayaran {
      font-weight: bold;
      color: black;
      font-size: 20px;
      top: 40px;
      text-align: center;
      position: relative;
    }

    .putih {
      background-color: white;
      box-shadow: 1px 2px 3px gray;
      border-radius: 6px;
      top: 50px;
      left: 80px;
      height: 40px;
      width: 65%;
      position: relative;
    }

      .putih .nomor {
      color: black;
      top: 7px;
      font-size : 17px;
      letter-spacing: 2px;
      text-align: center;
      position: relative;
    }

    .sudah-bayar {
      width: 22%;
      position: relative;
      background-color: black;
      height: 50px;
      opacity: 0.8;
      top: 80px;
      border-radius: 6px;
      font-size: 12px;
      left: 130px;
      color: white;
    }

    .cancel {
      width: 22%;
      position: relative;
      background-color: black;
      height: 50px;
      opacity: 0.8;
      top: 80px;
      border-radius: 6px;
      font-size: 12px;
      color: white;
      left: 140px;
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
    <h2>Transaksi</h2>
  </div>

  <div class="bg-putih">
      <p class="text-bayar">Mohon melakukan pembayaran dalam kurun waktu 24 jam</p>
      <p class="nomor-pembayaran">Nomor Pembayaran</p>

      <div class="putih">
      <p class="nomor"><?php echo $cartassoc['id_temp_user'] ?></p>
      </div>
        
      <a href="sudah-bayar.php">
      <button class="sudah-bayar" type="button">Saya Sudah Membayar</button>
      </a>
      
      <a href="batal-transaksi.php">
      <button class="cancel" type="button">Batalkan pembayaran</button>
      </a>
  </div>


</body>
</html>