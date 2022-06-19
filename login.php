<?php
require_once('helper.php');

if (isset($_POST['user_email']) && isset($_POST['user_password'])) {

    $user_email  = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = mysqli_query($db_connect, "SELECT * FROM users WHERE user_email='$user_email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($user_password, $row["user_password"])) {
            echo json_encode(array('message' => 'Login Success!'));
        } else {
            echo json_encode(array('message' => 'Gagal Login!'));
            return false;
        }
    } else {
        echo json_encode(array('message' => 'Login Failed!'));
        return false;
    }
} else {
    echo json_encode(array('message' => 'Inputan harus diisi semua'));
}
