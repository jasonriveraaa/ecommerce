<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/sidebar.php' ?>

    <section id="dashboard">
        <?php include 'includes/topbar.php' ?>

        <?php
        // show content
        $sql = "SELECT * FROM tbl_shipping WHERE id = 1 ";
        $data = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($data)) {
            $shipping_content = $row['content'];
        }

        if (isset($_POST['btn_save'])) {

            $edit_shipping_content = $_POST['form_shipping_content'];

            $sql = "UPDATE tbl_shipping SET content='$edit_shipping_content'";

            $result = mysqli_query($con, $sql);

            if ($result) {
                $success_msg = "Changes Saved";
                echo "<script type='text/javascript'>alert('$success_msg');</script>";
                header("location: admin_shipping.php");
            } else {
                $failed_msg = "Error";
                echo "<script type='text/javascript'>alert('$failed_msg');</script>";
            }
        }

        ?>
        <h1 class="welcome-text">Shipping & Condition Page</h1>

        <form action="" method="post">

            <div class="mb-3">
                <textarea class="editor" name="form_shipping_content"><?php echo $shipping_content ?></textarea>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success" type="submit" name="btn_save">Save</button>
            </div>

        </form>

    </section>

</body>

<?php include 'includes/script.php' ?>

</html>