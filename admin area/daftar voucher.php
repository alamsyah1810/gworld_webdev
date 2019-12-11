<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT id_game, nama_game, status_game, nama_jenisgame, gambar, deskripsi FROM game g, jenis_game j WHERE g.id_jenisgame=j.id_jenisgame");
?>

<html>

<head>
  <title>Daftar voucher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>

<body>

<div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "menu.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 588px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th colspan ="6" style="text-align:center;">Daftar produk</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">ID Game</td>
                      <td style="text-align:center;">Produk</td>
                      <td style="text-align:center;">Status Kerjasama</td>
                      <td style="text-align:center;">Jenis Game</td>
                      <td style="text-align:center;">Logo</td>
                      <td style="text-align:center;">Deskripsi Produk</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['id_game']   ?></td>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['nama_game']   ?></td>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['status_game']   ?></td>
                    <td style="text-align:center;width:8%;"><?php echo $tampung['nama_jenisgame']   ?></td>
                    <td style="text-align:center;"><img style="width: 39%;height: 40px;" class="steam" src="images_catalog/<?php echo $tampung['gambar']?> "></td>
                    <td style="text-align:justify;padding-left:130px;padding-right:130px;"><?php echo $tampung['deskripsi']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
