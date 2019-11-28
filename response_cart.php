<?php
    session_start();
    if($_POST){
        $p = $_POST;

        $idBarang = $p['id_barang'];
        $qtyBarang = $p['qty'];

        foreach($_SESSION['cart'] as $key=>$value){
            $item_cart = $value;
           // print_r($item_cart);
            if($item_cart['id'] == $idBarang){
                $_SESSION['cart'][$key]['qty'] = $qtyBarang;
            }
        }
        echo "<h1>berhasil update cart dengan ID=$idBarang !</h1>";
    }
    ?>