<?php
include("config_onlline.php");
session_start();
$query=mysqli_query($con,"select * from metode_pembayaran");

$tampung=mysqli_fetch_assoc($query);

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Pembayaran - GamingWorld</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='css/bootstrap.min.css'>
  <script src="script/jquery.min.js"></script>
  
  <script src='js/bootstrap.min.js'></script>

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
      top: 83px;
      border-radius: 0px 0px 10px 10px;
      left: 34%;
      height: 480px;
      background-color: white;
      position: relative;
      border: 1px solid #B0C4DE;
    }

    .bg-putih h2 {
      position: relative;
      color: gray;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      top: 20px;
      left: 30px;
    }

    .bg-putih .pembayaran {
      position: relative;
      top: 15px;
      
    }

    .bg-putih .metode {
      top: 20px;
      position: relative;
      margin-top: 10px;
      border-color: rgb(170, 170, 170);
      box-shadow: 1px 2px 3px gray;
      border-radius: 6px;
      text-align:center;
      width: 60%;
      left: 100px;
      height: 70px;
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
    
    .tombol {
      position:relative; 
      top: 100px; 
      border-radius: 4px; 
      background-color:black; 
      color:white;
      left: 54%;
      width: 7%;
      border:0px; 
      height: 40px; 
      opacity:0.8;
    }

    .tombol-bayar{
      position:relative; 
      top: 100px; 
      border-radius: 4px; 
      background-color:black; 
      color:white;
      width: 7%;
      left: 35%;
      border:0px; 
      height: 40px; 
      opacity:0.8;
    }

  </style>
</head>

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
    <h2>Pembayaran</h2>
  </div>

  <div class="bg-putih">
  <?php while($tampung=mysqli_fetch_assoc($query)):?>
    <div class="metode">
         <a href="aksicheckout.php?id_metodepembayaran=<?php echo $tampung['id_metodepembayaran']?>">
         <img style="position:relative;top:15px;" src="images_catalog/<?php echo $tampung['gambar']?> ">
         </a>
    </div>
    <?php endwhile; ?>
  </div>

  <a href="checkout.php">
  <button class="tombol-bayar" type="button">Kembali</button>
  </a>
  <a href="hapuscart-index.php">
  <button class="tombol" type="button">Batal</button>

  <?php

  ?>

</body>


</html>