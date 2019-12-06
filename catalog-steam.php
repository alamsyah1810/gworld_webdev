<?php
include("config_onlline.php");
session_start();
$query=mysqli_query($con,"SELECT * FROM game where nama_game='$_GET[jenis]';");
$tampung=mysqli_fetch_assoc($query);

$query2=mysqli_query($con,"select nominal_voucher FROM voucher v, game g WHERE g.id_game = v.id_game and g.nama_game='$_GET[jenis]';");

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
  <link rel="stylesheet" href='css/gamingworld-catalog.css'>
  <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>


</head>

<body>
  <nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="Web_prototype_navbar.php">GamingWorld</a>
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
            <li><a href="#">Point</a></li>
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
              <h4 style="position:relative;right:15px;"><?php echo $tampung2['nominal_voucher']?></h4>
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
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email" name="Email">
        </div>
        <button type="button" onclick="alert('Ditambahkan ke Keranjang')">Tambah ke keranjang</button>
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