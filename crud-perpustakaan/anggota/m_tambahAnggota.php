<?php

$nama_anggota = $_POST['nama_anggota'];
$kelas = $_POST['kelas'];
$telepon = $_POST['telepon'];

$sql = mysqli_query($koneksi, "INSERT INTO anggota VALUES(Null, '$nama_anggota', '$kelas', '$telepon')");

if ($sql) {
    header('location: ?halaman=daftarAnggota');
}
