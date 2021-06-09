<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="carousel">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item main active" data-bs-interval="5000">
                    <img src="./assets/img/1.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item main" data-bs-interval="5000">
                    <img src="./assets/img/2.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item main" data-bs-interval="5000">
                    <img src="./assets/img/3.jpg" class="d-block" alt="...">
                </div>
            </div>
        </div>

        <div class="carousel-row">
            <div class="carousel-col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item sub active" data-bs-interval="5000">
                            <img src="./assets/img/1.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="5000">
                            <img src="./assets/img/2.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="5000">
                            <img src="./assets/img/3.jpg" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item sub active" data-bs-interval="8000">
                            <img src="./assets/img/1.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="8000">
                            <img src="./assets/img/2.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="8000">
                            <img src="./assets/img/3.jpg" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item sub active" data-bs-interval="5000">
                            <img src="./assets/img/1.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="5000">
                            <img src="./assets/img/2.jpg" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item sub" data-bs-interval="5000">
                            <img src="./assets/img/3.jpg" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="featured-items">
        <div class="container">
            <h1 class="header-style optimus">Featured Items</h1>

            <div class="featured-items-row">

                <?php
                $sql = "SELECT * FROM tbl_item ORDER BY date DESC LIMIT 3";
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
                    $date = $row['date'];
                ?>
                    <div class="featured-items-col">
                        <div class="product-box">
                            <div class="image-box">
                                <img src="./assets/img/<?php echo $img ?>" alt="">
                                <img src="./assets/img/<?php echo $hover_img ?>" class="image-hover" alt="">
                            </div>
                            <div class="text-box">
                                <div class="title-box">
                                    <p class="collection"><?php echo $collection ?></p>
                                    <p class="product-title"><a href="product_page.php?p_id=<?php echo $id ?>&cat_id=<?php echo $category ?>"><?php echo $name ?> (<?php echo $color ?>)</a></p>
                                </div>
                                <div class="price-box">
                                    <span class="price">
                                        <span class="currency">
                                            &#8369;<?php echo $price ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="shop-btn">
                <a href="shop.php" class="view-products-btn">View Products</a>
            </div>

        </div>
    </section>

    <section class="latest-items">
        <div class="container">
            <h1 class="header-style optimus">Latest Items</h1>

            <div class="latest-items-row">

                <?php
                $sql = "SELECT * FROM tbl_item ORDER BY date DESC LIMIT 8";
                $data = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($data)) {
                    $name = $row['name'];
                    $color = $row['color'];
                    $price = $row['price'];
                    $collection = $row['collection'];
                    $category = $row['category_id'];
                    $img = $row['img'];
                    $hover_img = $row['hover_img'];
                    $date = $row['date'];
                ?>
                    <div class="latest-items-col">
                        <div class="product-box">
                            <div class="image-box">
                                <img src="./assets/img/<?php echo $img ?>" alt="">
                                <img src="./assets/img/<?php echo $hover_img ?>" class="image-hover" alt="">
                            </div>
                            <div class="text-box">
                                <div class="title-box">
                                    <p class="collection"><?php echo $collection ?></p>
                                    <p class="product-title"><a href="product_page.php?p_id=<?php echo $id ?>&cat_id=<?php echo $category ?>"><?php echo $name ?> (<?php echo $color ?>)</a></p>
                                </div>
                                <div class="price-box">
                                    <span class="price">
                                        <span class="currency">
                                            &#8369;<?php echo $price ?>
                                        </span>
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