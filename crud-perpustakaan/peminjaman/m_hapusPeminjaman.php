<?php

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$id'");

if ($sql) {
    header('location: ?halaman=daftarPeminjaman');
}
