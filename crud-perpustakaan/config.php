<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

$koneksi = mysqli_connect("$hostname", "$username", "", "$database");

if (!$koneksi) {
    echo "Koneksi Gagal";
}
