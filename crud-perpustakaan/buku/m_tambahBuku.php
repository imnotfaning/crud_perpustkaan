<?php

$judul = $_POST['judul'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

$sql = mysqli_query($koneksi, "INSERT INTO buku VALUES(Null, '$judul', '$tahun_terbit', '$jumlah', '$pengarang', '$penerbit')");

if ($sql) {
    header('location: ?halaman=daftarBuku');
}
