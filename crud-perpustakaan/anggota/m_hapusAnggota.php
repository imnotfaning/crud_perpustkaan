<?php

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$id'");

if ($sql) {
    header('location: ?halaman=daftarAnggota');
}
