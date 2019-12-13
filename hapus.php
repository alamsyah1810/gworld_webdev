<?php

require 'functions.php';

$id=$_GET['id_cart'];

header("Location:keranjang.php");

if(hapus($id) > 0) {
  
}else{
   

};



?>


