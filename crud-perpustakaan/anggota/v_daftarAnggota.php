<div class="container">
    <h2>Daftar Anggota</h2>
    <a href="?halaman=tambahAnggota" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <th>Id Anggota</th>
            <th>Nama Anggota</th>
            <th>Kelas</th>
            <th>Telepon</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM anggota");
            foreach ($sql as $anggota) {
            ?>
                <tr>
                    <td><?= $anggota['id_anggota'] ?></td>
                    <td><?= $anggota['nama_anggota'] ?></td>
                    <td><?= $anggota['kelas'] ?></td>
                    <td><?= $anggota['telepon'] ?></td>
                    <td><a href="?halaman=ubahAnggota&id=<?= $anggota['id_anggota'] ?>" class="badge text-bg-primary">Ubah</a></td>
                    <td><a href="?halaman=hapusAnggota&id=<?= $anggota['id_anggota'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="badge text-bg-danger">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>