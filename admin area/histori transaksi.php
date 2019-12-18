<?php
include("config_onlline.php");
$query=mysqli_query($con,"SELECT * FROM transksi");
?>

<html>

<head>
    <title>Histori transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='table.css'>

  <style>
.dropbtn {
  background-color: inherit;
  border-radius: 6px;
  position: relative;
  left: 340px;
  width:80px;
  color: black;
  height: 40px;
 bottom:3px;
  font-size: 17px;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: inherit;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  left: 320px;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>


<body style="width:105%;">

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Filter</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Transaksi Terbaru</a>
    <a href="#about">Transaksi Terlama</a>
  </div>
</div>

<div style='width: 300px;float:left:background-color:#eee;bottom:38px;position:relative;'>
    <?php include "index.php" ; ?>
  </div>

    <div style="position: relative; left: 300px; bottom: 626px;" class="table-responsive">
        <table style="width:50%;" class="table table-striped">
            <thead>
                <tr>
                    <th style="text-align:center;" colspan="6">Histori transaksi</th>
                </tr>
                <tr style="background-color:#dddddd;">    
                    <td style="text-align:center;">ID Transaksi</td>
                    <td style="text-align:center;">ID User</td>
                    <td style="text-align:center;">ID Temp User</td>
                    <td style="text-align:center;">Tanggal</td>
                    <td style="text-align:center;">Harga</td>
                    <td style="text-align:center;">Metode Pembayaran</td>
                </tr>
            </thead>
            <tbody>
                <?php while($tampung=mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td style="text-align:center;"><?php echo $tampung['id_transksi']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_user']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_temp_user']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['date']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['total_harga']   ?></td>
                    <td style="text-align:center;"><?php echo $tampung['id_metodepembayaran']   ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</html>