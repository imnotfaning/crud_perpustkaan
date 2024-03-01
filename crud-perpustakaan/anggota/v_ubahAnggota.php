<?php

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota='$id'");
$anggota = mysqli_fetch_assoc($sql);
?>
<div class="container">
    <h2>Ubah Anggota</h2>
    <form action="?halaman=simpanUbahAnggota" method="post">
        <input type="hidden" name="id" value="<?= $anggota['id_anggota'] ?>">
        <div class="row">
            <div class="col-3">
                Nama Anggota :
                <input type="text" name="nama_anggota" id="" class="form-control" value="<?= $anggota['nama_anggota'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Kelas :
                <input type="text" name="kelas" id="" class="form-control" value="<?= $anggota['kelas'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Telepon:
                <input type="text" name="telepon" id="" class="form-control" value="<?= $anggota['telepon'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>