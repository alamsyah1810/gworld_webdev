<?php
 session_start();
 session_regenerate_id();

$con=mysqli_connect("jmswijaya.com","isb18","Isb_2018","store18_5"); //sesuaikan dengan password dan username mysql anda
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($con,"select * from `user` where nama_user='$username' and password_user='$password'");
$user_id = mysqli_fetch_all($query);
$cek = mysqli_num_rows($query);


if($cek>0){
    echo ' <script>
    alert("selamat datang $username")
    window.location="login.php"
    </script>';
   header("Location: index.php");
  
   $_SESSION["nama"]=$username;
   $_SESSION["ID"]=$user_id[0][0];
}else{
    echo '<script>
    alert ("Username atau Password salah!");
    window.location="login.php";
    </script>';
}
?>
