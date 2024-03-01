<div class="container">
    <h2>Tambah Buku</h2>
    <form action="?halaman=simpanBuku" method="post">
        <div class="row">
            <div class="col-3">
                Judul :
                <input type="text" name="judul" id="" class="form-control">
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
                <input type="text" name="jumlah" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Pengarang :
                <input type="text" name="pengarang" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                penerbit :
                <input type="text" name="penerbit" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>