<?php
 session_start();
 session_regenerate_id();

$con=mysqli_connect("jmswijaya.com","isb18","Isb_2018","store18_5"); //sesuaikan dengan password dan username mysql anda
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($con,"select * from `user` where nama_user='$username' and password_user='$password'");
$cek = mysqli_num_rows($query);

var_dump($cek);
if($cek>0){
    echo ' <script>
    alert("selamat datang $username")
    window.location="login.php"
    </script>';
   header("Location: Web prototype navbar.php");
  
   $_SESSION["nama"]=$username;
}else{
    echo '<script>
    alert ("Username atau Password salah!");
    window.location="login.php";
    </script>';
}
?>