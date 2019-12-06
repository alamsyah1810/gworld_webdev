<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT MAX(harga_voucher) as 'harga voucher termahal' , nominal_voucher, nama_game FROM voucher v, game g WHERE v.id_game = g.id_game group by nama_game, nominal_voucher ORDER BY `harga voucher termahal` DESC
");
?>
<html>

<head>
  <title>Voucher Termahal</title>
</head>
<style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 5px;
    text-align: left;
  }
</style>
<body>

<div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "menu.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 588px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center;" colspan="3">Voucher termahal</th>
                    </tr>
                    <tr>
                      <td style="text-align:center;">Harga voucher</td>
                      <td style="text-align:center;">Nominal</td>
                      <td style="text-align:center;">Nama game</td>
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

