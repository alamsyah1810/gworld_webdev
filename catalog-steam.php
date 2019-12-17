<?php
include("config_onlline.php");
session_start();
$_SESSION['sid']=session_id();

$query=mysqli_query($con,"SELECT * FROM game where nama_game='$_GET[jenis]';");
$tampung=mysqli_fetch_assoc($query);


$query2=mysqli_query($con,"select g.id_game ,harga_voucher,id_voucher,nominal_voucher FROM voucher v, game g WHERE g.id_game = v.id_game and g.nama_game='$_GET[jenis]';");

$_SESSION['nama_game']=$_GET['jenis'];

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>


<!DOCTYPE html>
<html>

<head>
  <title><?php echo $tampung['nama_game']?> - GamingWorld</title>
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

  .catalog-steam .steam {
    max-width: 500px;
    padding-top: 0px;
    padding-left: 25px;
  }

  .steam-wallet .steam-text h3 {
    padding-left: 25px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }

  .steam-wallet .steam-text p {
    padding-left: 25px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 17px;
    padding-right: 50px;
  }

  .bgputih {
    width: 50%;
    height: 550px;
    position: relative;
    border-radius: 0px 0px 10px 10px;
    left: 380px;
    border: 1px solid #B0C4DE;
    top: 110px;
    background-color: white;
  }

  .bgputih .col-md-12 {
    top: 40px;
    right: 5px;
  }

  .deskripsi {
    color: black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    position: relative;
    top:40px;
    opacity: 0.8;
    padding-left: 30px;
    padding-right: 30px;
  }

  .steam {
    width: 55%;
    position: relative;
    border-radius: 6px;
    top: 20px;
    left: 160px;
  }

  .header {
      width: 50%;
      left: 380px;
      color: white;
      top: 110px;
      background: black;
      opacity: 0.7;
      text-align: center;
      border: 0px solid #B0C4DE;
      border-radius: 10px 10px 0px 0px;
      padding: 20px;
      position: relative;
    
    }


    </style>

</head>

<body>

<style>
    <?php if(isset($_SESSION['barang dipilih'])) {
      ?>
    .wallet-12
    {
    background-color:white;
    }
    <?php
    }

    ;
    ?>

    .col-md-12 .col-md-4 .wallet-12 .voucher {
      position:relative;
      margin-top: 10px;
      width: 100%;
      height: 60px;
      bottom: 10px;
      background-color: inherit;
      border-radius: 5px;
      left: 5px;
      font-size: 17px;
      color:gray;
      box-shadow: 1px 2px 3px gray;
      letter-spacing:1px;
    }

  </style>

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
    <h2><?php echo $tampung['nama_game']?></h2>
  </div>
   
      <div class="bgputih">
      <img class="steam" src="images_catalog/<?php echo $tampung['gambar']?> ">
      <p class="deskripsi"><?php echo $tampung['deskripsi']?></p>
        <div class="col-md-12">
          <?php while($tampung2=mysqli_fetch_assoc($query2)):?>

          <div class="col-md-4" style="bottom:0px;margin-top:10px;text-align:center;">
            <div class="wallet-12">
            <a href="aksicart-steam.php?voucher=<?php echo $tampung2['id_voucher']?>&nominal=<?php echo $tampung2['harga_voucher']?>">
            <button class="voucher" type="button"><?php echo $tampung2['nominal_voucher']?></button>
              </a>
            </div>
          </div>
          <?php endwhile; ?>
          
        </div>
      </div>

      <br>
      <br>

      
      <br>
      <br>
    </div>
  </div>

  

</body>

</html>