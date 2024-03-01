<div class="container">
    <h2>Daftar Peminjaman</h2>
    <a href="?halaman=tambahPeminjaman" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <th>Id Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Anggota</th>
            <th>Petugas</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM peminjaman");
            foreach ($sql as $peminjaman) {
            ?>
                <tr>
                    <td><?= $peminjaman['id_peminjaman'] ?></td>
                    <td><?= $peminjaman['tanggal_peminjaman'] ?></td>
                    <td><?= $peminjaman['tanggal_kembali'] ?></td>
                    <td><?= $peminjaman['anggota'] ?></td>
                    <td><?= $peminjaman['petugas'] ?></td>
                    <td><a href="?halaman=ubahPeminjaman&id=<?= $peminjaman['id_peminjaman'] ?>" class="badge text-bg-primary">Ubah</a></td>
                    <td><a href="?halaman=hapusPeminjaman&id=<?= $peminjaman['id_peminjaman'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="badge text-bg-danger">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>