<?php
include("config_onlline.php");
$query=mysqli_query($con,"select v.nominal_voucher, g.nama_game, count(d.id_hash) as jumlah FROM voucher v, game g, detail_voucher d where v.id_game=g.id_game and d.id_voucher=v.id_voucher and d.status_voucher=2 group by d.id_voucher order by jumlah asc
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
    <?php include "menu.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 588px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th colspan="3">Pembelian voucher terendah</th>
                    </tr>
                    <tr>
                      <td style="text-align:center;">Nominal</td>
                      <td style="text-align:center;">Game</td>
                      <td style="text-align:center;">Jumlah</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td><?php echo $tampung['nominal_voucher']   ?></td>
                    <td><?php echo $tampung['nama_game']   ?></td>
                    <td><?php echo $tampung['jumlah']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>