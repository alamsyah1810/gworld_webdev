<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT id_user, nama_user, status_user, poin_user FROM user u order by poin_user desc");
?>
<html>

<head>
  <title>Poin terbanyak user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>
</head>

<body>

<div style='width: 300px;float:left:background-color:#eee;'>
    <?php include "index.php" ; ?>
  </div>

 <div style="position: relative; left: 300px; bottom: 570px;" class="table-responsive">
                <table style="width: 50%;" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center;" colspan="2">User dengan poin terbanyak</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">User</td>
                      <td style="text-align:center;">Poin</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;"><?php echo $tampung['nama_user']?></td>
                    <td style="text-align:center;"><?php echo $tampung['poin_user']?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>

