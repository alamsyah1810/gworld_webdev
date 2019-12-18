<?php
include("config_onlline.php");
$query=mysqli_query($con,"select g.nama_game,count(v.id_voucher) as `uu`,v.id_voucher, nama_jenisgame from jenis_game j,cart c,game g,voucher v where g.id_game=v.id_game and c.id_voucher=v.id_voucher and j.id_jenisgame = g.id_jenisgame group by id_voucher order by uu ASC
");
?>

<html>

<head>
  <title>Pembelian voucher terbanyak</title>
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
    <?php include "index.php" ; ?>
  </div>

  <div style="position: relative; left: 300px; bottom: 570px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                      <th style="text-align:center;" colspan="3">Pembelian voucher terbanyak</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">Game</td>
                      <td style="text-align:center;">Jenis</td>
                      <td style="text-align:center;">Jumlah</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['nama_game']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['nama_jenisgame']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['uu']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
