<?php
session_start();/*
$id = $_SESSION['id'];
require_once('_includes/db.php');

$query = "SELECT * FROM products WHERE id = $id";
$sql = mysqli_query ($con, $query) or die(mysqli_error($con));
$hasil = mysqli_fetch_assoc($sql);

if(isset($_POST['edit'])){
$nama=$_POST['nama_barang'];
$qty=$_POST['qty'];
$harga=$_POST['harga'];


    $query = "UPDATE products SET name='$nama', qty='$qty', price='$harga' WHERE id = $id";
    $sql = mysqli_query ($con, $query) or die(mysqli_error($con));

    header("location: index.php");
    
}*/
echo $_SESSION['id'];
?>
<!--
<!DOCTYPE html>
<html>

<head>
  <title>Ubah Barang</title>
  <script src="../assets/bootstrap-3.4.1-dist/js/jquery-1.12.4.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Ubah Barang</h1>
<form action="" method="POST">
            <table>
                <tbody><tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" value="<?php echo $hasil['name'];?>"></td>
                </tr>
                <tr>
                    <td>Qty.</td>
                    <td>:</td>
                    <td><input type="number" name="qty" value="<?php echo $hasil['qty'];?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga" value="<?php echo $hasil['price'];?>"></td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><?php echo $hasil['id'];?></td>
                </tr>
                <tr>
                    <td>Dibuat Pada</td>
                    <td>:</td>
                    <td><?php echo $hasil['created_at']." (Oleh: ".$hasil['created_by'].")";?></td>
                </tr>
                <tr>
                    <td>Diubah Pada</td>
                    <td>:</td>
                    <td><?php echo $hasil['updated_at']." (Oleh: ".$hasil['updated_by'].")";?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="edit" value="Ubah">
                    </td>
            </tr></tbody></table>
        </form>-->


