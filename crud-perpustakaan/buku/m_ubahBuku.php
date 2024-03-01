<?php

$id = $_POST['id'];
$judul = $_POST['judul'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

$sql = mysqli_query($koneksi, "UPDATE buku SET id_buku='$id', judul='$judul', tahun_terbit='$tahun_terbit', jumlah='$jumlah', pengarang='$pengarang', penerbit='$penerbit' WHERE id_buku='$id'");

if ($sql) {
    header('location: ?halaman=daftarBuku');
}
