<?php
include("config_onlline.php");
$query=mysqli_query($con,"select * from user");
$query2=mysqli_query($con,"SELECT COUNT(nama_user) as 'total user' FROM user");
?>

<html>

<head>
  <title>User terdaftar</title>
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
                      <th colspan ="4" style="text-align:center;">Total user terdaftar</th>
                    </tr>
                    <tr style="background-color:#dddddd;">
                      <td style="text-align:center;">ID User</td>
                      <td style="text-align:center;">Nama User</td>
                      <td style="text-align:center;">Email User</td>
                      <td style="text-align:center;">No HP User</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td style="text-align:center;width:10%;"><?php echo $tampung['id_user']   ?></td>
                    <td style="text-align:center;width:10%;"><?php echo $tampung['nama_user']   ?></td>
                    <td style="text-align:center;width:30%;"><?php echo $tampung['email_user']   ?></td>
                    <td style="text-align:center;width:30%;"><?php echo $tampung['telp_user']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                    <?php while($tampung2=mysqli_fetch_assoc($query2)): ?>
                    <tr>
                    <td colspan ="4" style="text-align:center;">Total User = <?php echo $tampung2['total user']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
