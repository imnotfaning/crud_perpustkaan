<div class="container">
    <h2>Daftar Buku</h2>
    <a href="?halaman=tambahBuku" class="btn btn-success">Tambah</a>
    <table class="table">
        <thead>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM buku");
            foreach ($sql as $buku) {
            ?>
                <tr>
                    <td><?= $buku['id_buku'] ?></td>
                    <td><?= $buku['judul'] ?></td>
                    <td><?= $buku['tahun_terbit'] ?></td>
                    <td><?= $buku['jumlah'] ?></td>
                    <td><?= $buku['pengarang'] ?></td>
                    <td><?= $buku['penerbit'] ?></td>
                    <td><a href="?halaman=ubahBuku&id=<?= $buku['id_buku'] ?>" class="badge text-bg-primary">Ubah</a></td>
                    <td><a href="?halaman=hapusBuku&id=<?= $buku['id_buku'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="badge text-bg-danger">Hapus</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>