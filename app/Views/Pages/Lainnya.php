<?= $this->extend('Layout/template'); ?>

<?= $this->Section('content'); ?>
<center>
    <h2 class="mt-3">Daftar Laporan</h2>
</center>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Email</th>
                <th scope="col">Gambar</th>
                <th scope="col">Pesan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>alo</td>
                <td>alo</td>
                <td>alo</td>
                <td><img src=""></td>
                <td>alo</td>
                <td>
                    <a href="" class="btn btn-dark">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection('content'); ?>