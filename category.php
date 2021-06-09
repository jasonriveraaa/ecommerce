<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="categories-section">
        <div class="container">
            <div class="breadcrumb-categories">
                <div class="breadcrumbs">
                    <a href="index.php" class="breadcrumb-link">Home</a>
                    <span class="divider">/</span>
                    <a class="breadcrumb-link active-link">Shop</a>
                </div>
                <div class="categories">
                    <p>Showing all 10 results</p>
                    <form action="" class="orderby-form">
                        <select name="orderby" class="orderby">
                            <option value="">Sort by popularity</option>
                            <option value="">Sort by latest</option>
                            <option value="">Sort by price: High to low</option>
                            <option value="">Sort by price: Low to high</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="main-shop">
        <div class="container">
            <div class="shop-body">

                <?php include 'includes/shop_side_bar.php' ?>

                <div class="shop-products">
                    <div class="shop-product-row">

                        <?php
                        if (isset($_GET['cat_id'])) {
                            $id = $_GET['cat_id'];
                        }

                        $sql = "SELECT * FROM tbl_item WHERE category_id ='$id'";
                        $data = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($data)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $color = $row['color'];
                            $price = $row['price'];
                            $collection = $row['collection'];
                            $category = $row['category_id'];
                            $img = $row['img'];
                            $hover_img = $row['hover_img'];
                        ?>
                            <div class="shop-product-col">
                                <div class="shop-product-box">
                                    <div class="shop-product-image">
                                        <img src="./assets/img/<?php echo $img ?>" alt="">
                                        <img src="./assets/img/<?php echo $hover_img ?>" class="image-hover" alt="">
                                    </div>
                                    <div class="shop-product-text-box">
                                        <div class="shop-product-title-box">
                                            <p class="collection"><?php echo $collection ?></p>
                                            <p class="product-title"><a href="product_page.php?p_id=<?php echo $id ?>&cat_id=<?php echo $category ?>"><?php echo $name ?> (<?php echo $color ?>)</a></p>
                                        </div>
                                        <div class="shop-product-price">
                                            <span class="price">
                                                &#8369;<?php echo $price ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>
</body>

<?php include 'includes/script.php' ?>

</html>