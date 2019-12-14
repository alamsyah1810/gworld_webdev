<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT * FROM game where id_jenisgame='$_GET[jenis]';");
$tampung=mysqli_fetch_assoc($query);


?>

<html>

<head>
  <title>Daftar voucher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>


<div style='width: 300px;float:left:background-color:#eee;'>
  <?php include "menu.php" ; ?>
</div>

<body>
 <div style="position: relative; left: 300px; bottom: 588px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center;" colspan="6">Game dengan voucher reedem</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">ID Game</td>
                      <td style="text-align:center;">Produk</td>
                      <td style="text-align:center;">Status Kerjasama</td>
                      <td style="text-align:center;">Logo</td>
                      <td style="text-align:center;">Deskripsi Produk</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['id_game']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['nama_game']   ?></td>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['status_game']   ?></td>
                    <td style="text-align:center;"><img style="height: 40px;" class="steam" src="images_catalog/<?php echo $tampung['gambar']?> "></td>
                    <td style="text-align:justify;padding-left:20px;padding-right:20px;width:50%;"><?php echo $tampung['deskripsi']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
