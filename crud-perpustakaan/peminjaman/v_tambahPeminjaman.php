<div class="container">
    <h2>Tambah Peminjaman</h2>
    <form action="?halaman=simpanPeminjaman" method="post">
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
                <input type="text" name="anggota" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Petugas :
                <input type="text" name="petugas" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>