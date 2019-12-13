<?php
session_start();
include("config_onlline.php");


$jumlahdata=mysqli_query($con,"SELECT count(nama_game) as 'aa' FROM game where jenis_game='2'");
$aa=mysqli_fetch_assoc($jumlahdata);
$dataperhalaman= 4;
$jumlahhalaman= ceil($aa['aa']/$dataperhalaman);

if(isset($_GET['halaman'])){
  $halamanaktif=$_GET['halaman'];
}else{
  $halamanaktif=1;
};
$awal=($halamanaktif*$dataperhalaman)-$dataperhalaman;

$query=mysqli_query($con,"SELECT * FROM game WHERE jenis_game='2'limit $awal,$dataperhalaman");

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>



<!DOCTYPE html>
<html>

<head>
  <title>Gaming World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='css/bootstrap.min.css'>
  <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>

  <style>
    body {
      background-color: rgb(255, 136, 0);
      padding-top: 80px;
      text-align: center;
      font-size: 24px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

    .bg-white {
      background-color: white;
      padding: 10px;
      min-height: 450px;
      color: black;
    }

    .col-md-3 .img-responsive {
      text-align: center;
      width: 60%;
      left: 40px;
      border-radius: 20px;
      position: relative;
    }

    .bg-white .col-md-12 p {
      font-size: 14px;
      padding-left: 350px;
      padding-right: 350px;
    }

    .bg-white .bayar-detik1 h4 {
      position: relative;
      padding-left: 180px;
    }

    .bg-white .bayar-detik1 p {
      position: relative;
      padding-left: 335px;
      padding-right: 100px;
      text-align: left;
    }

    .bg-white .metode-pembayaran h4 {
      position: relative;
      padding-right: 300px;
    }

    .bg-white .metode-pembayaran p {
      position: relative;
      padding-left: 90px;
      text-align: left;
    }

    .bg-white .pengiriman-instan h4 {
      position: relative;
      padding-left: 120px;
    }

    .bg-white .pengiriman-instan p {
      position: relative;
      padding-left: 335px;
      padding-right: 100px;
      text-align: left;
    }

    .bg-white .bantuan-24jam h4 {
      position: relative;
      padding-right: 390px;
    }

    .bg-white .bantuan-24jam p {
      position: relative;
      padding-left: 90px;
      text-align: left;
    }

    .bg-orange {
      background-color: rgb(255, 136, 0);
      min-height: 150px;
    }

    .bg-orange .col-md-12 .col-md-3 .help {
      top: 20px;
      background-color: white;
      width: 45%;
      height: 75px;
      left: 90px;
      position: relative;
      border-radius: 10px;
    }

    .bg-orange .col-md-12 .col-md-3 .help h4 {
      position: relative;
      color: rgb(0, 21, 88);
      top: 10px;
    }

    .bg-orange .col-md-12 .col-md-3 .help h5 {
      position: relative;
      top: 15px;
      color: black;
    }

    .bg-orange .col-md-12 .col-md-3 .negara {
      top: 30px;
      background-color: white;
      width: 45%;
      height: 75px;
      right: 90px;
      position: relative;
      border-radius: 10px;
    }

    .bg-orange .col-md-12 .col-md-3 .negara h5 {
      position: relative;
      top: 0px;
      color: rgb(71, 71, 71);
    }

    .bg-orange .col-md-12 .col-md-3 .negara .bendera {
      top: 5px;
      width: 20%;
      position: relative;
    }

    .bg-orange .col-md-12 .col-md-3 .fb {
      width: 10%;
      border-radius: 10px;
      position: relative;
      top: 40px;
    }

    .bg-orange .col-md-12 .col-md-3 .ig {
      width: 10%;
      border-radius: 10px;
      position: relative;
      top: 40px;
    }

    .bg-orange .col-md-12 .col-md-3 .copyright {
      top: 70px;
      position: relative;
      color: rgb(94, 94, 94);
      text-align: right;
      left: 110px;
      font-family: Arial, Helvetica, sans-serif;
    }

    .dropdown .btn-default {
      background-color: inherit;
      border: 0px;
      position: relative;
      margin-top: 10px;
      margin-left: 10px;
      right: 10px;
      font-family: inherit;
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
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
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

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>BELI KODE VOUCHER</p>
        <br>
      </div>
      <div class="col-md-12">
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=Steam'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game1" src='Images/steam_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=XBox'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game8"
              src='Images/xboxgiftcard_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">
          <a href="catalog-steam.php?jenis=Google play">
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game3" src='Images/gp_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=Playstation Store'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game4" src='Images/psn_store_tile.jpg'>
          </a>
          <br>
        </div>
      </div>

      <div class="col-md-12">
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=Contra'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game5" src='Images/contra_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=Garena'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game6"
              src='Images/garena_shells_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">
          <a href='catalog-steam.php?jenis=Nintendo E-Shop'>
            <img style="box-shadow: 2px 3px 4px #ce5816;" class="img-responsive game7"
              src='Images/nintendoeshop_tile.jpg'>
          </a>
        </div>
        <div class="col-md-3">

        </div>
      </div>
    </div>
    <br>
    <br>

    <div class="col-md-12">
      <p>DIRECT GAME TOP-UP</p>
      <br>
    </div>
    <div class="col-md-12">
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Free Fire'>
          <img class="img-responsive game1" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/5.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Mobile Legends Bang Bang'>
          <img class="img-responsive game2" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/11.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=PUBG Mobile'>
          <img class="img-responsive game3" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/15.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Speed Drifters'>
          <img class="img-responsive game8" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/17.jpg'>
        </a>
        <br>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Arena of Valor'>
          <img class="img-responsive game5"  style="box-shadow: 2px 3px 4px #ce5816;" src='Images/1.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Game of Sultans'>
          <img class="img-responsive game6" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/8.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Lumia Saga'>
          <img class="img-responsive game7" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/10.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Heroes Evolved'>
          <img class="img-responsive game8"  style="box-shadow: 2px 3px 4px #ce5816;" src='Images/9.jpg'>
        </a>
        <br>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Ragnarok'>
          <img class="img-responsive game5" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/16.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Mobile Legend Adventure'>
          <img class="img-responsive game6" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/12.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Crisis Action'>
          <img class="img-responsive game7" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/2.jpg'>
        </a>
      </div>
      <div class="col-md-3">
      <a href='catalog-steam.php?jenis=Call of Duty Mobile'>
          <img class="img-responsive game2" style="box-shadow: 2px 3px 4px #ce5816;" src='Images/3.jpg'>
        </a>
      </div>
    </div>
  </div>
  <br>
  <br>

  <div class="webinfo bg-white" id="info">
    <div class="row">
      <div class="col-md-12">
        <h3>GamingWorld : Website top-up terpercaya di Indonesia</h3>
        <p>Setiap bulannya, jutaan gamers menggunakan GamingWorld untuk melakukan pembelian kredit game dengan lancar.
          Top-up Mobile Legends, Free Fire, Ragnarok M, dan berbagai game lainnya!
        </p>
      </div>
      <div class="col-md-12">
        <div class="col-md-6 bayar-detik1">
          <h4>Bayar dalam hitungan detik</h4>
          <p>Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran di GamingWorld karena
            situs kami berfungsi dengan baik dan mudah untuk digunakan.</p>
        </div>
        <div class="col-md-6 metode-pembayaran">
          <h4>Metode pembayaran terbaik</h4>
          <p>Kami menawarkan begitu banyak pilihan pembayaran mulai dari bank transfer, dan pembayaran di mini market
            terdekat.</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-6 pengiriman-instan">
          <h4>Pengiriman Instan</h4>
          <p>Ketika kamu melakukan top-up di GamingWorld, item atau barang yang kamu beli akan selalu dikirim ke akun
            kamu secara instan dan cepat, tanpa tertunda.</p>
        </div>
        <div class="col-md-6 bantuan-24jam">
          <h4>Bantuan 24 Jam</h4>
          <p>Tim kami tersedia selama 24 jam selama 7 hari penuh dalam seminggu untuk menjawab pertanyaan-pertanyaan
            kamu. Kami akan terus bekerja keras meningkatkan pelayanan kami :)</p>
        </div>
      </div>
    </div>
  </div>

  <div class="about" id="about">
    <div class="bg-orange">
      <div class="col-md-12">
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
          <a href="https://www.facebook.com/NzReVeaLzYuwa">
            <img class="fb" src='Images/Facebook_logo_(square).png'>
          </a>
          <a href="https://www.instagram.com/sumargo.hans/">
            <img class="ig" src='Images/new_instagram_logo-1024x1024.jpg'>
          </a>
          <h5 class="copyright">© Hak Cipta Gaming World 2019</h5>
        </div>
        <div class="col-md-3">
          <div class="help">
            <h5>Ada Masalah ?</h5>
            <h4>Kontak Kami</h4>
          </div>
        </div>
        <div class="col-md-3">
          <div class="negara">
            <img class="bendera" src='Images/flag-155928_640.png'>
            <h5>Indonesia</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cart">
    <a href="keranjang.php">
      <img style="position:fixed; width:3%; height: 42px; float:left; left:20px; bottom: 20px;"
        src='images/black-shopping-cart-icon-22.png'>
      <a href="keranjang.php">
  </div>

</body>

</html>