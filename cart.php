<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="cart-section">
        <div class="container">
            <div class="cart-body">
                <div class="product-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col" colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (isset($_SESSION['cart'])) {
                                $total = 0;
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $total = $total + $value['price'] * $value['quantity'];
                            ?>
                                    <tr>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><span>&#8369;<?php echo $value['price'] ?></span></td>
                                        <td style="width: 100px;">
                                            <form action="update_cart_item.php" method="POST">
                                                <div class="num-block skin-2">
                                                    <div class="num-in">
                                                        <span class="minus dis"></span>
                                                        <input name="quantity" type="text" class="in-num" value="<?php echo $value['quantity'] ?>">
                                                        <span class="plus"></span>
                                                    </div>
                                                </div>
                                        </td>
                                        <td>
                                            <input type="submit" value="Update Item" name="btn_updatecartitem" class="btn btn-warning">
                                            <input type="hidden" name="item_name" value="<?php echo $value['name'] ?>">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="delete_cart_item.php" method="POST">
                                                <input type="submit" value="Delete" name="btn_deletecartitem" class="btn btn-danger">
                                                <input type="hidden" name="item_name" value="<?php echo $value['name'] ?>">
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="total-price">
                    <h1>Cart total</h1>
                    <p>subtotal: <span>&#8369; <?php echo $total ?></span> </p>
                    <input type="button" value="Proceed to checkout" class="register-btn">
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>
</body>

<?php include 'includes/script.php' ?>

</html>