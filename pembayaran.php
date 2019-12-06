<?php
include("config_onlline.php");
$query=mysqli_query($con,"select * from metode_pembayaran");
$tampung=mysqli_fetch_assoc($query);

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
      width: 55%;
      top: 120px;
      border-radius: 10px;
      left: 23%;
      height: 580px;
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

    .bg-putih .pembayaran {
      position: relative;
      top: 15px;
      left: 14px;
    }

    .bg-putih .metode {
      top: 40px;
      position: relative;
      margin-top: 10px;
      border-color: rgb(170, 170, 170);
      box-shadow: 1px 2px 3px gray;
      border-radius: 6px;
      width: 86%;
      left: 60px;
      height: 70px;
    }

    .bg-putih button {
      border-radius: 6px;
      top: 70px;
      left: 320px;
      position: relative;
      width: 17%;
      background-color: orange;
      height: 40px;
      box-shadow: 1px 2px 3px gray;
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
        <li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
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

  <div class="bg-putih">
  <h2>Pilih Metode Pembayaran</h2>
  <?php while($tampung=mysqli_fetch_assoc($query)):?>
    <div class="metode">
      <img class="pembayaran" src="images_catalog/<?php echo $tampung['gambar']?> ">
    </div>
    <?php endwhile; ?>
    <button type="button" onclick="alert('Hello world!')">Bayar Sekarang</button>
  </div>


</body>

</html>