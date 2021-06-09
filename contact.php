<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <a id="button"></a>

    <?php include 'includes/nav.php' ?>

    <section class="contact-section">
        <div class="container">
            <div class="contact-body">
                <p class="optimus">contact us</p>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="contact-no" class="form-label">Contact No.</label>
                        <input type="text" class="form-control" id="contact-no">
                    </div>
                    <div class="mb-3">
                        <label for="concern" class="form-label">Concern</label>
                        <textarea class="form-control" id="concern" rows="3"></textarea>
                    </div>
                    <input type="button" value="Submit" class="contact-btn">
                </form>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>
</body>

<?php include 'includes/script.php' ?>

</html>