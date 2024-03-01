<?php

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");

if ($sql) {
    header('location: ?halaman=daftarBuku');
}
