<?php
$con=mysqli_connect("localhost","root","","mycons"); //sesuaikan dengan password dan username mysql anda
$total=mysqli_query($con,"select cart_id,nama_produk,jumlah,kursi,subtotal
from cart_produk cp, kursi k,produk p
where cp.produk_id=p.produk_id and cp.kursi_id=k.kursi_id
order by jumlah desc;
");


?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
      
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
    
        <title>Dashboard Template for Bootstrap</title>
    
        
      </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="menuawal.php">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
              </ul>
              <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
              </form>
            </div>
          </div>
        </nav>
    
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-md-2 sidebar" style="position: relative;top:100px">
              <ul class="nav nav-sidebar">
                <li class="active"><a href="user.php">User <span class="sr-only">(current)</span></a></li>
                <li><a href="jenis_pembayaran.php">Jenis pembayaran</a></li>
                <li><a href="history_transaksi.php">History transaksi</a></li>
                <li><a href="jumlah_user.php">Jumlah user yang ada</a></li>
              </ul>
              <ul class="nav nav-sidebar">
                <li><a href="musik.php">Produk kategori musik</a></li>
                <li><a href="drama.php">Produk kategori drama</a></li>
                <li><a href="expo.php">Produk kategori expo</a></li>
                <li><a href="orc.php">Produk kategori orchestra</a></li>
                <li><a href="pop.php">Musik bergenre pop</a></li>
              </ul>
              <ul class="nav nav-sidebar">
                <li><a href="dikit.php">Pembelian tersedikit</a></li>
                <li><a href="banyak.php">Pembelian terbanyak</a></li>
                <li><a href="mahal.php">Produk termahal</a></li>
                <li><a href="murah.php">Produk termurah</a></li>
                <li><a href="tinggi.php">Musik bergenre rock</a></li>
              </ul>
              <ul class="nav nav-sidebar">
                <li><a href="rendah.php">Musik bergenre jazz</a></li>
                <li><a href="belum_dibeli.php">Produk yang belum dibeli</a></li>
                <li><a href="stok_banyak.php">Produk dengan stok terbanyak</a></li>
                <li><a href="kota_banyak.php">Kota paling banyak konser</a></li>
                <li><a href="artis_tampil.php">Artis yang sering tampil</a></li>
                <li><a href="berhasil.php">Pembayaran yang berhasil</a></li>
                <li><a href="gagal.php">Pembayaran yang gagal</a></li>
              </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"style="position: fixed;margin-top:85px">
              <h1 class="page-header">Dashboard</h1>

    
              <h2 class="sub-header">Section title</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($total)): ?>
                    <tr>
                    <td><?php echo $tampung['cart_id']   ?></td>
                      <td><?php echo $tampung['nama_produk']   ?></td>
                      <td><?php echo $tampung['jumlah']   ?></td>
                      <td><?php echo $tampung['kursi']   ?></td>
                      <td><?php echo $tampung['subtotal']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      
        <script src="../assets/script/jquery-3.4.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.js"></script>
        <script src="script.js"></script>
    </body>
</html>