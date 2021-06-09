<div class="side-bar">
    <span class="sidebar-header-title">browse</span>
    <ul>
        <?php
        $sql = "SELECT * FROM category";
        $data = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <li>
                <a href="category.php?cat_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
            </li>
        <?php
        }
        ?>
    </ul>

    <span class="sidebar-header-title">Featured Products</span>
    <ul class="featured-product-list">

        <?php
        $sql = "SELECT * FROM tbl_item ORDER BY date DESC LIMIT 3";
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
            <li>
                <a href=""><img src="assets/img/<?php echo $img ?>" width="100" height="100" alt="">
                    <span class="sidebar-product-title"><?php echo $name ?> (<?php echo $color ?>)</span>
                    <p class="price-wrapper"><span class="currency">&#8369;<?php echo $price ?></span></p>
                </a>
            </li>
        <?php
        }
        ?>

    </ul>
</div>