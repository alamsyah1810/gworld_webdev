<?php
include("config_onlline.php");
//$query=mysqli_query($con,"SELECT max(id_metodepembayaran) as 'Metode paling sering' FROM transksi");
$query=mysqli_query($con,"SELECT m.id_metodepembayaran,COUNT(t.id_metodepembayaran) as `Metode paling sering` FROM transksi t, metode_pembayaran m where t.id_metodepembayaran=m.id_metodepembayaran GROUP by id_metodepembayaran ORDER by `Metode paling sering` desc");

?>

<html>

<head>
  <title>Metode pembayaran paling sering</title>
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
                      <th colspan="2" style="text-align:center;width:55%;">Metode pembayaran paling sering</th>
                    </tr>
                    <td style="text-align:center;">Metode</td>
                    <td style="text-align:center;">Jumlah</td>
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
