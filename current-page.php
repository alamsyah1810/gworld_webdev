<?php
    session_start();
    require_once('config.php');

if(isset($_session['cart'])){

} else {
    $var_cart = array (
        0=>array(
                "id"            => "B01",
                "nama"          => "Barang 1",
                "qty"           => 2,
                "harga satuan"  => 200
        ),
        1=>array(
                "id"            => "B03",
                "nama"          => "Barang 3",
                "qty"           => 1,
                "harga satuan"  => 400
        ),
        2=>array(
                "id"            => "B07",
                "nama"          => "Barang 7",
                "qty"           => 5,
                "harga satuan"  => 100
        ),
    );
    $_session['cart'] = $var_cart;
}

    ?>
<html>

<head>
    <base href='<?php echo $base_url;?>' />
    <title>Belajar AJAX </title>
    <script src='script/jquery-3.4.1.min.js'></script>
</head>

<body>
    <button type='button' class='btn-refresh'> refresh DIV #refresh</button>
    <div id='refresh'>
    </div>
    <div id="cart">
        <?php
        foreach($_session['cart'] as $item_cart){
            $cetak_qty = "<input class='nud-qty' type='number', value='$item_cart[qty]' data-id_barang='$item_cart[id]'> ";
            echo $item_cart[id].
                    "-".$item_cart[nama].
                    "-".$item_cart[harga_satuan].
                    "-".$cetak_qty;
            echo "<br/>";
        }
    ?>
    </div>
    <script>
        /*$(document).ready(function(){
        console.log('jquerry siap!');
        alert('jquerry siap!');
    });*/

        $(document).ready(function () {
            $('.btn-refresh').on('click', function () {
                alert('saya ditekan!');
                $.ajax({
                    url: 'response_ajax.php',
                    method: 'GET',
                    datatype: "html",
                    success: function (result) {
                        $('#refresh').html(result);
                    }
                });
            });

            $('.nud-qty').on('change', function () {
                alert($(this).val());

                var idBarang = $(this).data('id_barang');
                var qtyBarang = $(this).val();

                $.ajax({
                    url: 'response_cart.php',
                    method: 'POST',
                    data: {
                        id_barang: idBarang,
                        qty: qtyBarang
                    },
                    datatype: "html",
                    success: function(result) {
                        $('#refresh').html(result);
                    }
                });
            });
        });
    </script>
</body>

</html>