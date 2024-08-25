<?= $this->extend('Layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-11">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h2 class="h4 text-gray-900 mb-4">KOTAK ASPIRASI</h2>
                                        <h6>Kotak aspirasi ini dibuat untuk menampung kritik, saran,
                                            aspirasi dan masukan terkait program kerja MPK SMKN 1 KATAPANG</h6>
                                    </div>
                                    <?= csrf_field(); ?>
                                    <form action="<?= base_url("/aspiration/store") ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama" name="nama">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="kelas" placeholder="Kelas" name="kelas">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="kelas" placeholder="Email" name="email">
                                        </div><br>
                                        <div class="form-group">
                                            <label">Tambahkan gambar bila perlu</label><br>
                                                <input type="file" name="file">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="comment">Pesan:</label>
                                            <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
                                        </div><br>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Kirim">
                                            <label>Identitas pengirim terjaga kerahasiaannya</label>
                                        </div>
                                    </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>