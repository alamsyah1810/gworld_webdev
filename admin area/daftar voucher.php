<?php
include("config_onlline.php");
$query=mysqli_query($con,"select nama_game from game");
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
 <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Game</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                    <tr>
                    <td><?php echo $tampung['nama_game']   ?></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>

    </body>
    </html>
