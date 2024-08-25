<?= $this->extend('Layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="left-container">
        <div class="journal-page">
            <h1>Judul Jurnal</h1>
            <p>Tanggal: 14 Mei 2023</p>
            <p>Isi jurnal...</p>
        </div>

    </div>
    <div class="right-container">
        <h2>Container Kanan</h2>
        <p>Konten container kanan...</p>
    </div>
</div>

<?= $this->endSection('content'); ?>