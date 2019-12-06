<?php
include("config_onlline.php");
$query=mysqli_query($con,"select id_transksi, status_transksi, if(status_transksi =1,'ongoing','done') as status from transksi");
?>
<html>

<head>
  <title>Status transaksi</title>
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
          <th colspan="2" style="text-align:center;">Status Transaksi</th>
        </tr>
        <tr>
          <td>ID Transaksi</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <?php while($tampung=mysqli_fetch_assoc($query)): ?>
        <tr>
          <td><?php echo $tampung['id_transksi']?></td>
          <td><?php echo $tampung['status']?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

</body>

</html>