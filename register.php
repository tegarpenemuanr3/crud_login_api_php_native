<?php

require_once('helper.php');

if (isset($_POST['user_username']) && isset($_POST['user_password']) && isset($_POST['user_email'])) {

    // menerima parameter POST ( name, password, email )
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $password_before_encrypt = $_POST['user_password'];

    $result = mysqli_query($db_connect, "SELECT user_email FROM users WHERE user_email = '$user_email'");

    if (mysqli_fetch_assoc($result)) {
        echo json_encode(array('message' => 'username sudah terdaftar!'));
        return false;
    }

    $user_password = password_hash($password_before_encrypt, PASSWORD_DEFAULT);
    $sql = mysqli_query($db_connect, "INSERT INTO users VALUES('', '$user_username', '$user_password', '$user_email')");

    if ($sql) {
        echo json_encode(array('message' => 'Register Berhasil!'));
    } else {
        echo json_encode(array('message' => 'Register Gagal!'));
    }
} else {
    echo json_encode(array('message' => 'Inputan harus diisi semua'));
}
