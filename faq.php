<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="faq-section">
        <div class="container">
            <div class="faq-body">
                <p class="optimus">faq's</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                    <?php
                    $sql = "SELECT * FROM tbl_faq";
                    $data = mysqli_query($con, $sql);

                    $num_row = 1;
                    $target_row = 1;

                    while ($row = mysqli_fetch_assoc($data)) {
                        $return_title = $row['title'];
                        $return_content = $row['content'];
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $num_row++ ?>">
                                    <?php echo $return_title ?>
                                </button>
                            </h2>
                            <div id="flush-collapse<?php echo $target_row++ ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><?php echo $return_content ?></div>
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