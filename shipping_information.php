<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="shipping-section">
        <div class="container">
            <div class="shipping-body">
                <p class="optimus">shipping information</p>

                <?php
                $sql = "SELECT * FROM tbl_shipping WHERE id = 1";
                $data = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($data)) {
                    $return_content = $row['content'];
                }

                echo $return_content;
                ?>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>
</body>

<?php include 'includes/script.php' ?>

</html>