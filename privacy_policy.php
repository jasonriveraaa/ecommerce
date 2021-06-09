<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="privacy-section">
        <div class="container">
            <div class="privacy-body">
                <p class="optimus">privacy policy</p>

                <?php
                $sql = "SELECT * FROM tbl_privacy WHERE id = 1";
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