<?php
include("config_onlline.php");
session_start();
$query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]'");

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Keranjang - GamingWorld</title>
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
      width: 65%;
      top: 88px;
      border: 1px solid #B0C4DE;
      border-radius: 0px 0px 5px 8px;
      left: 19%;
      height: 520px;
      background-color: white;
      position: relative;
    }

    .bg-putih h2 {
      position: relative;
      color: gray;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      top: 20px;
      left: 30px;
    }

    .bg-putih .back-voucher {
      background-color: white;
      width: 90%;
      color: black;
      top: 20px;
      left: 40px;
      height: 80px;
      border-radius: 6px;
      position: relative;
      box-shadow: 1px 2px 3px gray;
    }

    .header {
      width: 65%;
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

  </style>
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


  <div class="header">
    <h2>Keranjang</h2>
  </div>

  <div style="overflow: auto;" class="bg-putih">
    <?php while($tampung=mysqli_fetch_assoc($query)) :?>
    <div style="margin-bottom: 20px;" class="back-voucher">

      <p style="left:165px; position:relative; top: 6px; font-weight:bold;"><?php echo $tampung['nama_game'] ?></p>
      <p style="left:165px; position:relative; bottom: 5px;"><?php echo $tampung['nominal_voucher'] ?></p>
      <p style="position:relative;left: 290px; bottom: 54px; font-weight: bold;">Harga</p>
      <p style="position:relative;left: 345px; bottom: 84px;">IDR</p>
      <p style="left:375px; position:relative; bottom: 114px;"><?php echo $tampung['harga_voucher'] ?></p>
      
      <img style="border-radius:4px;left: 13px;width:17%; height:60px; bottom:140px; position: relative;" src='images_catalog/<?php echo $tampung['gambar']?> ' alt="" srcset="">

    </div>
    <?php endwhile; ?>
  </div>


</body>

</html>