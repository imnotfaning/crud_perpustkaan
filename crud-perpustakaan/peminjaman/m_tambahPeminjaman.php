<?php

$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$anggota = $_POST['anggota'];
$petugas = $_POST['petugas'];

$sql = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES(Null, '$tanggal_peminjaman', '$tanggal_kembali', '$anggota', '$petugas')");

if ($sql) {
    header('location: ?halaman=daftarPeminjaman');
}
