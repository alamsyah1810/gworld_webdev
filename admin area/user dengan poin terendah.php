<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT id_user, nama_user, status_user, poin_user FROM user u order by poin_user asc");
?>
<html>

<head>
  <title>Poin terendah user</title>
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
                      <th colspan="2">User dengan poin terbanyak</th>
                    </tr>
                    <tr>
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

