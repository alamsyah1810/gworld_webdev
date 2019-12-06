<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT * FROM user");
?>

<html>

<head>
    <title>Poin User</title>
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
                    <th colspan="2" style="text-align:center;">Jumlah poin user</th>
                </tr>
                <tr>
                    <td style="text-align:center;">User</td>
                    <td>Poin</td>
                </tr>
            </thead>
            <tbody>
                <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?php echo $tampung['nama_user']   ?></td>
                    <td><?php echo $tampung['poin_user']   ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>