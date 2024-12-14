<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "toko_gudang";

    $db = mysqli_connect($hostname, $username, $password, $database_name);

    if($db->connect_error){
        echo "Koneksi GAGAL";
        die("ERROR");
    } echo "Koneksi BERHASIL";
?>