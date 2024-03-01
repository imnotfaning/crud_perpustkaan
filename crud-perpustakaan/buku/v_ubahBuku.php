<?php

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
$buku = mysqli_fetch_assoc($sql);
?>
<div class="container">
    <h2>Ubah Buku</h2>
    <form action="?halaman=simpanUbahBuku" method="post">
        <input type="hidden" name="id" value="<?= $buku['id_buku'] ?>">
        <div class="row">
            <div class="col-3">
                Judul :
                <input type="text" name="judul" id="" class="form-control" value="<?= $buku['judul'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tahun Terbit :
                <input type="text" name="tahun_terbit" id="" class="form-control" value="<?= date('Y:m:d') ?> " readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Jumlah :
                <input type="text" name="jumlah" id="" class="form-control" value="<?= $buku['jumlah'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Pengarang :
                <input type="text" name="pengarang" id="" class="form-control" value="<?= $buku['pengarang'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                penerbit :
                <input type="text" name="penerbit" id="" class="form-control" value="<?= $buku['penerbit'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>