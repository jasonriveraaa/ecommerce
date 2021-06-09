<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/sidebar.php' ?>

    <section id="dashboard">
        <?php include 'includes/topbar.php' ?>


        <?php
        // show content
        if (isset($_GET['p_id'])) {
            $id = $_GET['p_id'];
            $sql = "SELECT * FROM tbl_item WHERE id ='$id'";
            $data = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($data)) {
                $name = $row['name'];
                $color = $row['color'];
                $category = $row['category_id'];
                $price = $row['price'];
                $collection = $row['collection'];
                $img = $row['img'];
                $hover_img = $row['hover_img'];
            }
        }

        // edit
        if (isset($_POST['btn_save'])) {

            $edit_name = $_POST['form_name'];
            $edit_collection = $_POST['form_collection'];

            $edit_category = $_POST['form_category'];


            $edit_color = $_POST['form_color'];
            $edit_price = $_POST['form_price'];

            $edit_image = $_FILES['form_image']['name'];
            $edit_image_tmp = $_FILES['form_image']['tmp_name'];

            $edit_hover_image = $_FILES['form_hover_image']['name'];
            $edit_hover_image_temp = $_FILES['form_hover_image']['tmp_name'];

            if (empty($edit_image || $edit_hover_image)) {
                $query = "SELECT * FROM tbl_item WHERE id ='$id'";
                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $edit_image = $row['img'];
                    $edit_hover_image = $row['hover_img'];
                }
            }

            $sql = "UPDATE tbl_item SET name='$edit_name',color='$edit_color',category_id='$edit_category',price='$edit_price',collection='$edit_collection',img='$edit_image',hover_img='$edit_hover_image' WHERE id ='$id'";

            $result = mysqli_query($con, $sql);

            if ($result) {
                header("location: admin_products.php");
                move_uploaded_file($edit_image_tmp, "../assets/img/$edit_image");
                move_uploaded_file($edit_hover_image_temp, "../assets/img/$edit_hover_image");
            } else {
                $failed_msg = "Error";
                echo "<script type='text/javascript'>alert('$failed_msg');</script>";
            }
        }


        ?>
        <h1 class="welcome-text">Edit Product Page</h1>

        <form class="row g-3" method="post" enctype="multipart/form-data">

            <div class="col-md-6">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="form_name" value="<?php echo $name ?>">
            </div>
            <div class="col-md-6">
                <label for="collection" class="form-label">Collection Name</label>
                <input type="text" class="form-control" id="collection" name="form_collection" value="<?php echo $collection ?>">
            </div>

            <div class="col-md-4">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select" name="form_category">

                    <?php
                    $query = "SELECT * FROM category";
                    $data = mysqli_query($con, $query);

                    while ($value = mysqli_fetch_assoc($data)) {
                    ?>
                        <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
            <div class="col-md-4">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="form_color" value="<?php echo $color ?>">
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Price</label>
                <input type="text" class="form-control" id="inputZip" name="form_price" value="<?php echo $price ?>">
            </div>
            <div class="col-12">
                <label for="inputGroupFile01" class="form-label">Image</label>
                <img width="90" height="90" alt="<?php echo $img ?>" src="..//..//assets/img/<?php echo $img ?>">
                <input type="file" class="form-control" id="inputGroupFile01" name="form_image">
            </div>
            <div class="col-12">
                <label for="inputGroupFile01" class="form-label">Hover Image</label>
                <img width="90" height="90" alt="<?php echo $hover_img ?>" src="..//..//assets/img/<?php echo $hover_img ?>">
                <input type="file" class="form-control" id="inputGroupFile01" name="form_hover_image">
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success" type="submit" name="btn_save">Save</button>
            </div>
        </form>

    </section>

</body>

<?php include './includes/script.php' ?>

</html>