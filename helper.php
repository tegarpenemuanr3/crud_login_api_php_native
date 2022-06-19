<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'crud_api_native');

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die('Koneksi Gagal');

//untuk setiap request datanya akan tetap json
header('Content-Type: application/json');
