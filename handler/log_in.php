<?php
session_start();
include_once('db.php');

if (isset($_POST['btn_signin'])) {

    $username = mysqli_real_escape_string($con, $_POST['form_customer_email']);
    $password = mysqli_real_escape_string($con, $_POST['form_customer_password']);
    $password = md5($password);

    $query = "SELECT * FROM customer WHERE users_username = '$username'";
    $data = mysqli_query($con, $query);
    $errMessage = "wrong Credentials";
    while ($row = mysqli_fetch_assoc($data)) {

        $db_user_id = $row['users_id'];
        $db_user_username = $row['users_username'];
        $db_user_password = $row['users_password'];
        $db_user_role = $row['users_role'];
        $db_user_email = $row['users_email'];
    }

    if ($username === $db_user_username && $password === $db_user_password) {

        $_SESSION['userName'] = $db_user_username;
        $_SESSION['userRole'] = $db_user_role;
        $_SESSION['userEmail'] = $db_user_email;
        header("location: ../backend/index.php");
    } else {
        header("location: ../signin.php");
    }
}
