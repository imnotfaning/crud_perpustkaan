<?php

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
$peminjaman = mysqli_fetch_assoc($sql);
?>
<div class="container">
    <h2>Ubah Peminjaman</h2>
    <form action="?halaman=simpanUbahPeminjaman" method="post">
        <input type="hidden" name="id" value="<?= $peminjaman['id_peminjaman'] ?>">
        <div class="row">
            <div class="col-3">
                Tanggal Peminjaman :
                <input type="text" name="tanggal_peminjaman" id="" class="form-control" value="<?= date('Y:m:d') ?> " readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tanggal Kembali :
                <input type="text" name="tanggal_kembali" id="" class="form-control" value="<?= date('Y:m:d') ?> " readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Anggota :
                <input type="text" name="anggota" id="" class="form-control" value="<?= $peminjaman['anggota'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Petugas :
                <input type="text" name="petugas" id="" class="form-control" value="<?= $peminjaman['petugas'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>