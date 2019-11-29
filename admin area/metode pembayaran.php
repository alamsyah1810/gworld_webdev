<?php
include("config_onlline.php");
$query=mysqli_query($con,"select nama_metodepembayaran from metode_pembayaran where status_metodepembayaran = 1");
?>

<html>

<head>
  <title>Metode Pembayaran</title>
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
                      <th>Metode Pembayaran</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td><?php echo $tampung['nama_metodepembayaran']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
