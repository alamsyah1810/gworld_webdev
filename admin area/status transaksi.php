<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT t.id_transksi, t.`date`, t.total_harga, u.nama_user, t.id_metodepembayaran, t.no_rekening, t.id_temp_user, t.sub_total_harga, s.nama_statusvoucher FROM transksi t, `user` u, status_voucher s where t.id_user = u.id_user and s.id_status_voucher = t.id_statusvoucher");
?>
<html>

<head>
  <title>Status transaksi</title>
  <title>User terdaftar</title>
  <title>Daftar voucher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>


<body>

  <div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "index.php" ; ?>
  </div>


  <div style="position: relative; left: 300px; bottom: 570px;" class="table-responsive">
    <table class="table table-striped" style="width:90%;">
      <thead >
        <tr>
          <th colspan="8" style="text-align:center;">Status Transaksi</th>
        </tr>
        <tr style="background-color:#dddddd;">
          <td style="text-align:center;">ID Transaksi</td>
          <td style="text-align:center;">Tanggal</td>
          <td style="text-align:center;">Harga</td>
          <td style="text-align:center;">Nama User</td>
          <td style="text-align:center;">Metode pembayaran</td>
          <td style="text-align:center;">No Rekening</td>
          <td style="text-align:center;">Total Harga</td>
          <td style="text-align:center;">Status</td>
        </tr>
      </thead>
      <tbody>
        <?php while($tampung=mysqli_fetch_assoc($query)): ?>
        <tr>
          <td style="text-align:center;"><?php echo $tampung['id_transksi']?></td>
          <td style="text-align:center;"><?php echo $tampung['date']?></td>
          <td style="text-align:center;"><?php echo $tampung['total_harga']?></td>
          <td style="text-align:center;"><?php echo $tampung['nama_user']?></td>
          <td style="text-align:center;"><?php echo $tampung['id_metodepembayaran']?></td>
          <td style="text-align:center;"><?php echo $tampung['no_rekening']?></td>
          <td style="text-align:center;"><?php echo $tampung['sub_total_harga']?></td>
          <td style="text-align:center;"><?php echo $tampung['nama_statusvoucher']?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>

</html>