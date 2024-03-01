<?php

$id = $_POST['id'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$anggota = $_POST['anggota'];
$petugas = $_POST['petugas'];

$sql = mysqli_query($koneksi, "UPDATE peminjaman SET id_peminjaman='$id', tanggal_peminjaman='$tanggal_peminjaman', tanggal_kembali='$tanggal_kembali', anggota='$anggota', petugas='$petugas'  WHERE id_peminjaman='$id'");

if ($sql) {
    header('location: ?halaman=daftarPeminjaman');
}
