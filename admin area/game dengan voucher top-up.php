<?php
include("config_onlline.php");
$query=mysqli_query($con,"select nama_game from game where jenis_game = 2");
?>

<html>

<head>
  <title>Daftar voucher</title>
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
                      <th style="text-align:center;">Game dengan voucher top-up</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['nama_game']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
