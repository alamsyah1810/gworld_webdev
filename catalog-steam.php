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
  <link rel="stylesheet" href='css/gamingworld-catalog-steam.css'>
  <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>


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

  <div class="col-md-12" style="margin-top: 100px;">
    <div class="col-md-5">
      <div class="catalog-steam">
        <img class="steam" src="images_catalog/<?php echo $tampung['gambar']?> ">
      </div>

      <div class="steam-wallet">
        <div class="steam-text">
          <h3><?php echo $tampung['nama_game']?></h3>
          <p><?php echo $tampung['deskripsi']?></p>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="bgputih">
        <div class="putih-bundar">
          <div class="orange-bundar">
            <h2 class="satu">1</h2>
          </div>
        </div>
        <h3>Pilih Voucher</h3>
        <div class="col-md-12">
          <?php while($tampung2=mysqli_fetch_assoc($query2)):?>

          <div class="col-md-4" style="bottom:20px;margin-top:10px;text-align:center;">
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

      <div class="bgputih3">
        <div class="putih-bundar3">
          <div class="orange-bundar3">
            <h2 class="tiga">2</h2>
          </div>
        </div>
        <h3>Beli</h3>
        <p>Pastikan email anda sudah tepat</p>
        <div class="container">
          <form action="updatekeranjang-steam.php" method="POST">
            <div class="row">
              <div class="col">

                <input style="position:relative; left:80px; bottom:60px; width:48%; height:35px; color:black; border-radius:4px;border:1px;border-style:solid;border-color:gray;"
                  class="email" type="text" name="email" placeholder=" Email" required>
                <input style="position:relative; right:77px;bottom:18px; width:13%; height:35px; text-align:center; background-color: rgb(255,136,0); border-radius: 4px;"
                  class="button" type="submit" value="Tambah ke keranjang" onclick="alert('Ditambahkan ke Keranjang')">
              </div>

            </div>
          </form>
        </div>
      </div>
      <br>
      <br>
    </div>
  </div>

  <div class="cart">
    <a href="keranjang.php">
      <img style="position:fixed; width:3%; height: 42px; float:left; left:20px; bottom: 20px;"
        src='images/black-shopping-cart-icon-22.png'>
    </a>
  </div>

</body>

</html>