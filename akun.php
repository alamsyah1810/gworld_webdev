<?php
include("config_onlline.php");
session_start();

$query=mysqli_query($con,"select * from user where nama_user='$_SESSION[nama]';");
$tampung=mysqli_fetch_assoc($query);

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Akun - GamingWorld</title>
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
      height: 320px;
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
    
   .bg-putih .id-name {
       color:black;
       position:relative;
       font-weight:bold;
       left: 120px;
       font-size:15px;
       top: 40px;
   }

   .bg-putih .nama-user {
       color:black;
       position:relative;
       left: 250px;
       font-size:15px;
       top: 7px;
   }

   .bg-putih .email-user {
       color:black;
       position:relative;
       font-weight:bold;
       left: 120px;
       font-size:15px;
       top: 14px;
   }

   .bg-putih .nama-email {
       color:black;
       position:relative;
       left: 250px;
       font-size:15px;
       bottom: 18px;
   }

   .bg-putih .nomor-user {
    color:black;
       position:relative;
       font-weight:bold;
       left: 120px;
       font-size:15px;
       bottom: 10px;
   }

   .bg-putih .telp-user {
    color:black;
       position:relative;
       left: 250px;
       font-size:15px;
       bottom: 42px;
   }


   .bg-putih .poin {
    color:black;
       position:relative;
       left: 120px;
       font-weight:bold;
       font-size:15px;
       bottom: 32px;
   }

   .bg-putih .poin-user {
    color:black;
       position:relative;
       left: 250px;
       font-size:15px;
       bottom: 63px;
   }

   .bg-putih .button-akun {
       position: relative;
       background-color: white;
       color: black;
       bottom: 40px;
       left: 190px;
       border-radius: 4px;
       width: 24%;
       height: 40px;
   }

  </style>
</head>

<body>
  
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">GamingWorld</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="news.html">Gaming News</a></li>
      </ul>
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
            <li><a href="#">Account Settings</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>

        </div>

        <?php }else{  ?>

        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>

        <?php };?>

      </ul>
      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <div class="header">
    <h2>Akun Profil</h2>
  </div>

  
  <div class="bg-putih">
    <p class="id-name">ID User</p>
    <p class="nama-user"><?php echo $home?></p>
    <p class="email-user">Email</p>
    <p class="nama-email"><?php echo $tampung['email_user'] ?></p>
    <p class="nomor-user">Nomor HP</p>
    <p class="telp-user"><?php echo $tampung['telp_user'] ?></p>
    <p class="poin">Point</p>
    <p class="poin-user"><?php echo $tampung['poin_user'] ?></p>

    

  </div>
  


  <div class="cart">
    <a href="keranjang.php">
      <img style="position:fixed; width:3%; height: 42px; float:left; left:20px; bottom: 20px;"
        src='images/black-shopping-cart-icon-22.png'>
    </a>
  </div>
  


</body>

</html>