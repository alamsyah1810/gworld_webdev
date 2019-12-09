<?php
include("config_onlline.php");
session_start();
$sesi=session_id();
echo $sesi;
//$query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]'");
//$query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and c.id_user='$_SESSION[nama]'");

$queryiduser=mysqli_query($con,"select * from `user` where nama_user='$_SESSION[nama]'");
$cariiduser=mysqli_fetch_assoc($queryiduser);

//$query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, nama_user FROM cart c,game g,voucher v, `user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and c.id_user='$cariiduser[id_user]';");



if (isset($_SESSION['nama'])) {
  $queryiduser=mysqli_query($con,"SELECT id_user, nama_user FROM `user` u where nama_user='$_SESSION[nama]'");
  $cariiduser=mysqli_fetch_assoc($queryiduser);
  
  $query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, nama_user FROM cart c,game g,voucher v, `user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and c.id_user='$cariiduser[id_user]' ");
  $query2=mysqli_query($con,"select sum(c.total_harga)as `total_harga` from cart c where c.id_user='$cariiduser[id_user]';");
} else {
  $query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]'");
  $query2=mysqli_query($con,"select sum(c.total_harga)as `total_harga` from cart c where id_temp_user='$_SESSION[sid]';");
}


if(isset($_SESSION['nama'])){
  $home=$_SESSION['nama'];

}else{
 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='css/bootstrap.min.css'>
    <link rel="stylesheet" href='css/checkout2.css'>
    <script src="script/jquery.min.js"></script>
    <script src='js/bootstrap.min.js'></script>
    <title>Check out</title>
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

        <div class="col-25">
                <div class="container" style="padding-top:7%">
                  <h4>Cart
                    <span class="price" style="color:black">
                      <i class="fa fa-shopping-cart"></i>
                      <b></b>
                    </span>
                  </h4>
                  
                  <?php ($tampung2=mysqli_fetch_assoc($query2)) ?>
                 <p> <h2>Total <span class="price"><b>Rp <?php echo $tampung2['total_harga'] ?></b></span></h2></p>
                </div>
              </div>
            </div>
    

        <div class="row">
                <div class="col-75">
                  <div class="container">
                    <form action="aksicheckout2.php" method="POST">
              
                      <div class="row">
                        <div class="col-75">
                          <h3>Billing Address</h3>
                       
                          <label for="email"><i class="fa fa-envelope"></i> Email</label>
                          <input type="text" id="email" name="email" placeholder="john@example.com">
                         
              
                       
                          <h3>Payment</h3>
                          <label for="fname">Accepted Cards</label>
                            
                       
                          <label for="cname">Name on Card</label>
                          <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                          <label for="ccnum">Debit card number</label>
                          <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                     
                      </div>
                      <input type="submit" value="Continue to checkout" class="btn">
                    </form>
                  </div>
                </div>
                


          
</body>
</html>