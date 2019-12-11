<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT * FROM transksi");
?>

<html>

<head>
    <title>Histori transaksi</title>
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
                    <th style="text-align:center;" colspan="6">Histori transaksi</th>
                </tr>
                <tr>    
                    <td style="text-align:center;">id transaksi</td>
                    <td style="text-align:center;">id user</td>
                    <td style="text-align:center;">id temp user</td>
                    <td style="text-align:center;">tanggal</td>
                    <td style="text-align:center;">harga</td>
                    <td style="text-align:center;">Metode pembayaran</td>
                </tr>
            </thead>
            <tbody>
                <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td style="text-align:center;"><?php echo $tampung['id_transksi']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_user']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_temp_user']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['date']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['total_harga']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_metodepembayaran']   ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>