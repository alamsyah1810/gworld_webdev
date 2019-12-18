<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT MAX(harga_voucher) as 'harga voucher termahal' , nominal_voucher, nama_game FROM voucher v, game g WHERE v.id_game = g.id_game group by nama_game, nominal_voucher ORDER BY `harga voucher termahal` DESC
");
?>
<html>

<head>
  <title>Voucher Termahal</title>
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
                      <th style="text-align:center;" colspan="3">Voucher termahal</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;width:20%;">Harga voucher</td>
                      <td style="text-align:center;width:20%;">Nominal</td>
                      <td style="text-align:center;width:20%;">Nama game</td>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['harga voucher termahal']?></td>
                    <td style="text-align:center;"><?php echo $tampung['nominal_voucher']?></td>
                    <td style="text-align:center;"><?php echo $tampung['nama_game']?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>

