<?php
session_start();
if (isset($_SESSION['cart'])) {
    $checker = array_column($_SESSION['cart'], 'name');
    if (in_array($_GET['cart_name'], $checker)) {
        echo
        "<script>
        
        alert('Product Already Added');
        window.location.href='shop.php';

        </script>";
    } else {


        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('id' => $_GET['cart_id'], 'name' => $_GET['cart_name'], 'price' => $_GET['cart_price'], 'quantity' => 1);
        echo
        "<script> 
    
        alert('Product added');
        window.location.href='shop.php';

        </script>";
    }
} else {
    $_SESSION['cart'][0] = array('id' => $_GET['cart_id'], 'name' => $_GET['cart_name'], 'price' => $_GET['cart_price'], 'quantity' => 1);
    echo
    "<script> 

    alert('Product added');
    window.location.href='shop.php';

    </script>";
}
