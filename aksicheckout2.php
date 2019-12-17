<?php

session_start();
include("config_onlline.php");
$cardname = $_POST['cardname'];
$cardnumber= $_POST['cardnumber'];
$email= $_POST['email'];

$tampung=$_GET;
//$query=mysqli_query($con,"SELECT count(id_cart)+1 as'aa' FROM `cart`");
$user=mysqli_query($con,"SELECT id_user FROM `user` where nama_user='$_SESSION[nama]'");
$userid=mysqli_fetch_assoc($user);
//$hasil=mysqli_fetch_assoc($query);
//$inputcart=mysqli_query($con,"insert into cart values($hasil[aa],'$userid[id_user]','$_SESSION[sid]','$tampung[voucher]','$tampung[nominal]','0','0','0')");
//$_SESSION['barang dipilih']=1;

//query buat array
//query1 buat voucher ter atas
//query2 buat harga

if (isset($_SESSION['nama'])) {
    $queryiduser=mysqli_query($con,"SELECT id_user, nama_user FROM `user` u where nama_user='$_SESSION[nama]'");
    $cariiduser=mysqli_fetch_assoc($queryiduser);
    
    $query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, nama_user FROM cart c,game g,voucher v, `user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and c.id_user='$cariiduser[id_user]' ");
    $query1=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, nama_user FROM cart c,game g,voucher v, `user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and c.id_user='$cariiduser[id_user]' limit 1");  
    $query2=mysqli_query($con,"select sum(c.total_harga)as `total_harga` from cart c where c.id_user='$cariiduser[id_user]';");
} else {
    $query=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]'");
    $query1=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]' limit 1");
    $query2=mysqli_query($con,"select sum(c.total_harga)as `total_harga1` from cart c where id_temp_user='$_SESSION[sid]';");
}









$tampung2=mysqli_fetch_assoc($query2);

header("Location: catalog-pubgm.php?jenis=$_SESSION[nama_game]");


$inputtransaksi=mysqli_query($con,"insert into transksi (`date`, total_harga, id_user, id_metodepembayaran, no_rekening, id_temp_user, tambah_poin_user, kurangi_poin_user, sub_total_harga, id_statusvoucher) values(curdate(),'$tampung2[total_harga1]','$cariiduser[id_user]','BCA','846651356455','$_SESSION[sid]',0,0,$tampung2,1);");
if (isset($_SESSION['nama'])) {
$querytransaksi=mysqli_query($con,"SELECT * FROM transksi t where id_user='$cariiduser[id_user]' order by id_transksi desc limit 1 ");
$hasilqueryt=mysqli_fetch_assoc($querytransaksi);
} else {
    $querytransaksi=mysqli_query($con,"SELECT * FROM transksi t where id_temp_user='$_SESSION[sid]' order by id_transksi desc limit 1");
    $hasilqueryt=mysqli_fetch_assoc($querytransaksi);
};


?>
<?php while($tampung=mysqli_fetch_assoc($query)) :?>
<?php 

if (isset($_SESSION['nama'])) {
    $queryiduser=mysqli_query($con,"SELECT id_user, nama_user FROM `user` u where nama_user='$_SESSION[nama]'");
    $cariiduser=mysqli_fetch_assoc($queryiduser);
    $query1=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, nama_user, c.id_voucher FROM cart c,game g,voucher v, `user` u WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and u.id_user=c.id_user and c.id_user='$cariiduser[id_user]' limit 1"); 
    $cariidvoucher=mysqli_fetch_assoc($query1);
    
} else {
    $query1=mysqli_query($con,"SELECT nama_game,nominal_voucher,harga_voucher,gambar, c.id_voucher  FROM cart c,game g,voucher v WHERE c.id_voucher=v.id_voucher and g.id_game=v.id_game and id_temp_user='$_SESSION[sid]' limit 1");
    $cariidvoucher=mysqli_fetch_assoc($query1);

}

$ambilvoucher=mysqli_query($con,"SELECT d.id_hash, d.id_voucher, d.id_statusvoucher, d.id_transaksi, d.id_player, d.email_player, d.id_game FROM detail_voucher d, cart c where c.id_voucher=d.id_voucher and d.id_statusvoucher = '1' and c.id_voucher='$cariidvoucher(c.id_voucher)' limit 1;");
$ambilvoucher1=mysqli_fetch_assoc($ambilvoucher);
$updatedetaivoucherbuattransaksi=mysqli_query($con,"update detail_voucher d set d.id_statusvoucher= '3',d.id_transaksi='$hasilquery[id_transksi]',d.id_player='0', d.email_player='0' where id_hash='$ambilvoucher(d.id_hash)';");
$deletecart=mysqli_query($con,"DELETE FROM cart WHERE id_user='$cariiduser[id_user]' limit 1;");

?>



    <?php endwhile; ?>



