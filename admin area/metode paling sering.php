<?php
include("config_onlline.php");
//$query=mysqli_query($con,"SELECT max(id_metodepembayaran) as 'Metode paling sering' FROM transksi");
$query=mysqli_query($con,"SELECT m.id_metodepembayaran,COUNT(t.id_metodepembayaran) as `Metode paling sering` FROM transksi t, metode_pembayaran m where t.id_metodepembayaran=m.id_metodepembayaran GROUP by id_metodepembayaran ORDER by `Metode paling sering` desc");

?>

<html>

<head>
  <title>Metode pembayaran paling sering</title>
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
                      <th colspan="2" style="text-align:center;">Metode pembayaran paling sering</th>
                    </tr>
                    <td style="text-align:center;">Metode</td>
                    <td>Jumlah</td>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['id_metodepembayaran']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['Metode paling sering']  ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
