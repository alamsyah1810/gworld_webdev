<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT t.id_transksi, t.`date`, t.total_harga, u.nama_user, t.id_metodepembayaran, t.no_rekening, t.id_temp_user, t.sub_total_harga, s.nama_statusvoucher FROM transksi t, user u, status_voucher s where t.id_user = u.id_user and s.id_status_voucher = t.id_statusvoucher;");
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
    <?php include "menu.php" ; ?>
  </div>


  <div style="position: relative; left: 300px; bottom: 588px;" class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th colspan="2" style="text-align:center;">Status Transaksi</th>
        </tr>
        <tr>
          <td>ID Transaksi</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <?php while($tampung=mysqli_fetch_assoc($query)): ?>
        <tr>
          <td><?php echo $tampung['id_transksi']?></td>
          <td><?php echo $tampung['status']?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>

</html>