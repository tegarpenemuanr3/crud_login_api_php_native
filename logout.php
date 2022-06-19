<?php
require_once('helper.php');

if (isset($_POST)) {
    echo json_encode(array('message' => 'Logout Berhasil!'));
}
