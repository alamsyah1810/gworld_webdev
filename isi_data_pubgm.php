<?php
include("config_onlline.php");
session_start();
$_SESSION['sid']=session_id();

if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{}
?>


<!DOCTYPE html>
<html>

<head>

  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <title>Gaming World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='css/bootstrap.min.css'>
  <script src="script/jquery.min.js"></script>
  <script src='js/bootstrap.min.js'></script>

  <style>
    body {
      background-color: rgb(255, 136, 0);
      opacity: 0, 5;
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



    .header {
      width: 40%;
      margin: 50px auto 0px;
      color: white;
      background: black;
      opacity: 0.7;
      text-align: center;
      border: 0px solid #B0C4DE;
      border-bottom: none;
      border-radius: 10px 10px 0px 0px;
      padding: 20px;
      position: relative;
      top: 120px;
    }

    /* style the container */
    .container {
      background-position: center;
      border-radius: 0px 0px 10px 10px;
      position: relative;
      top: 115px;
      height: 220px;
      padding-top: 100px;
      margin: 0px auto;
      width: 40%;
      background-color: white;
      border: 1px solid #B0C4DE;
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
    <h2>Masukan Email & ID</h2>
  </div>

  <form action="updatekeranjang.php" method="POST">
  <div class="container">
  <div class="col">
      <input style="position:relative; left:60px; bottom:60px; width:78%; height:35px; color:black; border-radius:4px;border:1px;border-style:solid;border-color:gray;"
            class="email" type="text" name="email" placeholder=" Email" required>
      <input style="position:relative; left:60px; bottom:45px; width:78%; height:35px; color:black; border-radius:4px;border:1px;border-style:solid;border-color:gray;"
                  class="id" type="text" name="id" placeholder=" ID" required>
      <input style="position:relative; left:169px;bottom:28px; width:39%; height:35px; text-align:center; background-color: black; color:white;opacity:0.8; border-radius: 4px;"
            class="button" type="submit" value="Lanjut ke Checkout">
   </div>
  </div>
  </form>
  
  </div>
  </div>



</body>

</html>