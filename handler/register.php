<?php
session_start();
include_once('db.php');

if (isset($_POST['register-btn'])) {

    $user_username = $_POST['form_user_username'];
    $user_password = $_POST['form_user_password'];

    $sql = "INSERT INTO customer (username,password) VALUE ('$user_username',MD5('$user_password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("location: index.php");
    } else {
        echo "Query Failed";
    }
}
