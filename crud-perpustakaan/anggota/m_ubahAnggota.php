<?php

$id = $_POST['id'];
$nama_anggota = $_POST['nama_anggota'];
$kelas = $_POST['kelas'];
$telepon = $_POST['telepon'];

$sql = mysqli_query($koneksi, "UPDATE anggota SET id_anggota='$id', nama_anggota='$nama_anggota', kelas='$kelas', telepon='$telepon'  WHERE id_anggota='$id'");

if ($sql) {
    header('location: ?halaman=daftarAnggota');
}
