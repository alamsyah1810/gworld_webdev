<?php
include("config_onlline.php");
$query=mysqli_query($con,"select g.gambar,g.nama_game,count(v.id_voucher) as `uu`,v.id_voucher, nama_jenisgame from jenis_game j,cart c,game g,voucher v where g.id_game=v.id_game and c.id_voucher=v.id_voucher and j.id_jenisgame = g.id_jenisgame and j.id_jenisgame ='1' group by id_voucher order by uu desc
");
?>

<html>

<head>
  <title>Pembelian voucher reedem terbanyak</title>
</head>


<body>

<div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "index.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 570px;" class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                      <th colspan="3">Voucher reedem sering dibeli</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">Game</td>
                      <td style="text-align:center;">Jumlah</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['nama_game']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['uu']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
