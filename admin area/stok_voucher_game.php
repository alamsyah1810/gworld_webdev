<?php
include("config_onlline.php");
$query=mysqli_query($con,"select id_voucher, nominal_voucher from voucher v, game g WHERE g.id_game=v.id_game and g.nama_game='$_GET[jenis]';");
$query2=mysqli_query($con,"select nama_game from voucher v, game g WHERE g.id_game=v.id_game and g.nama_game='$_GET[jenis]';");

$tampung2=mysqli_fetch_assoc($query2);
// echo "<pre>";
// print_r($tampung2);
// echo"</pre>";
// die();
?>
<html>

<head>
  <title>Stock Voucher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>

<body>

 <div class="table-responsive">
                <table style="width:30%;" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center;" colspan=2>Stok Voucher [<?php echo $tampung2['nama_game']?>]</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">ID Voucher</td>
                      <td style="text-align:center;">Nominal</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['id_voucher']?></td>
                    <td style="text-align:center;"><?php echo $tampung['nominal_voucher']?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>

