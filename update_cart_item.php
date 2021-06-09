<?php
session_start();
$qty = $_POST['quantity'];

if (isset($_POST['btn_updatecartitem'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['item_name']) {
            $_SESSION['cart'][$key]['quantity'] = $qty;
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script> alert('item Updated'); window.location.href='cart.php'</script>";
        }
    }
}
