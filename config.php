<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'learn_php';

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Koneksi Gagal" . mysqli_connect_error());
    }
?>