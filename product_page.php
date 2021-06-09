<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="product-section">

        <div class="container">
            <div class="product-content">
                <div class="product-image-col">
                    <div class="main">

                        <div class="slider-for">

                            <div class="big-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_1.jpg">
                            </div>
                            <div class="big-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_2.jpg">
                            </div>
                            <div class="big-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_3.jpg">
                            </div>
                            <div class="big-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_4.jpg">
                            </div>
                            <div class="big-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_5.jpg">
                            </div>

                        </div>

                        <div class="slider-nav">

                            <div class="small-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_1.jpg">
                            </div>
                            <div class="small-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_2.jpg">
                            </div>
                            <div class="small-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_3.jpg">
                            </div>
                            <div class="small-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_4.jpg">
                            </div>
                            <div class="small-slider">
                                <img class="slickimg" src="./assets/img/Love_Unites_Hoodie_5.jpg">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="product-info-col">
                    <?php
                    if (isset($_GET['p_id'])) {
                        $id = $_GET['p_id'];
                    }
                    $sql = "SELECT * FROM tbl_item WHERE id ='$id'";
                    $data = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($data)) {
                        $name = $row['name'];
                        $color = $row['color'];
                        $price = $row['price'];
                        $collection = $row['collection'];
                        $category = $row['category_id'];
                    }
                    ?>
                    <div class="breadcrumb">
                        <a href="index.php" class="breadcrumb-link">Home</a>
                        <span class="divider">/</span>
                        <a href="" class="breadcrumb-link">Shirt</a>
                    </div>
                    <h1 class="product-name optimus"><?php echo $name ?> (<?php echo $color ?>)</h1>
                    <div class="price-wrapper">
                        <span class="currency">
                            &#8369;<?php echo $price ?>
                        </span>
                    </div>
                    <div class="product-description">
                        <p><span class="heading">100% Cotton | Embroidered Design</span></p>
                        <p>Features</p>
                        <ul>
                            <li>Transparency: No</li>
                            <li>Lining: No</li>
                            <li>Shine: No</li>
                            <li>Thickness of fabric: Normal</li>
                            <li>Silhouette: Standard</li>
                            <li>Stretch: No</li>
                        </ul>
                        <p><span class="heading"><?php echo $collection ?> Collection</span>
                            <br>
                            Please note that the product image may appear differently from the actual product due to lighting and shots angles. Also, the actual size might be slightly different from the image shown here.
                        </p>
                    </div>
                    <div class="value">
                        <div class="pick-size-section">
                            <span class="size-text">Size: </span>
                            <select name="" id="" class="form-select size">
                                <option value="">Choose an option</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="2xl">2XL</option>
                            </select>
                        </div>
                        <div class="num-block skin-2">
                            <div class="num-in">
                                <span class="minus dis"></span>
                                <input type="text" class="in-num" value="1" name="quantity_form">
                                <span class="plus"></span>
                            </div>
                            <button onclick="location.href='carthandler.php?cart_id=<?php echo $id ?>&cart_name=<?php echo $name ?>&cart_price=<?php echo $price ?>'" class="btn btn-secondary" type="submit" name="btn_addtocart">Add to cart</button>
                        </div>
                    </div>
                    <div class="cat-sec">
                        <span>Categories: </span>
                        <?php
                        if (isset($_GET['cat_id'])) {
                            $cat_id = $_GET['cat_id'];
                        }
                        $sql = "SELECT * FROM category WHERE id = '$cat_id'";
                        $data = mysqli_query($con, $sql);

                        while ($result = mysqli_fetch_assoc($data)) {
                        ?>
                            <a class="cat-link" href="category.php?cat_id=<?php echo $result['id'] ?>"><?php echo $result['name'] ?></a>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="related-product">
        <div class="container">
            <h1 class="related-product-text optimus">related Products</h1>
            <div class="related-product-row">
                <?php
                // $sql = "SELECT * FROM tbl_item WHERE category_id = '$cat_id'";
                $sql = "SELECT * FROM tbl_item ";
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
                    <div class="related-product-col">
                        <div class="related-product-box">
                            <div class="related-product-image">
                                <img src="./assets/img/<?php echo $img ?>" alt="">
                                <img src="./assets/img/<?php echo $hover_img ?>" class="image-hover" alt="">
                            </div>
                            <div class="related-product-text-box">
                                <div class="related-product-title-box">
                                    <p class="collection"><?php echo $collection ?></p>
                                    <p class="product-title"><a href="product_page.php?p_id=<?php echo $id ?>&cat_id=<?php echo $category ?>"><?php echo $name ?> (<?php echo $color ?>)</a></p>
                                </div>
                                <div class="related-product-price">
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

    </section>

    <?php include 'includes/footer.php' ?>
</body>

<?php include 'includes/script.php' ?>

</html>