<?php
include("config_onlline.php");
$query=mysqli_query($con,"select * from metode_pembayaran where status_metodepembayaran=1");
?>

<html>

<head>
  <title>Metode Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>

<body>

<div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "index.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 570px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center;" colspan="3">Metode Pembayaran</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">Metode Pembayaran</th>
                      <td style="text-align:center;">ID Metode Pembayaran</th>
                      <td style="text-align:center;">Logo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;width:30%;"><?php echo $tampung['nama_metodepembayaran']   ?></td>
                    <td style="text-align:center;width:30%;"><?php echo $tampung['id_metodepembayaran']   ?></td>
                    <td style="text-align:center;"><img style="width: 54%;height: 30px;" class="steam" src="images_catalog/<?php echo $tampung['gambar']?> "></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
