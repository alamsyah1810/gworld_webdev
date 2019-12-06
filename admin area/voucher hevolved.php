<?php
include("config_onlline.php");
$query=mysqli_query($con,"select id_voucher, nominal_voucher from voucher where id_game='he01'");
?>
<html>

<head>
  <title>oucher Heroes Evolved</title>
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
 <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th colspan=2>Voucher Heroes Evolved</th>
                    </tr>
                    <tr>
                      <td>ID Voucher</td>
                      <td>Nominal</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td><?php echo $tampung['id_voucher']?></td>
                    <td><?php echo $tampung['nominal_voucher']?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>

