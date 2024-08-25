<?= $this->extend('Layout/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="left-container">
        <h2 class="mt-5">Tentang MPK</h2>
        <img src="/img/tentang.jpg" width="490px" height="350px" class="mt-5"><br>
        <button class="button-1 mt-3" onclick="document.getElementById('modal1').style.display='block'">PENDAHULUAN</button>
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal1').style.display='none'">&times;</span>
                <h2>Majelis Permusywaratan Kelas</h2>
                <center>
                    <div class=right-panel>
                        <a class="navbar-brand" href="#">
                            <img src="/img/MPK.png" style="width:150px;">
                        </a>
                    </div>
                    <div class="left-panel">
                        <p>Majelis Permusywaratan Kelas (MPK) adalah lembaga legislatif siswa yang juga mengawasi OSIS. MPK berfungsi sebagai aspirator dari seluruh warga SMA Negeri 1 Katapang, evaluator kerja dan kinerja OSIS dalam satu periode,
                            dan planner untuk merencanakan Anggaran Dasar dan Anggaran Rumah Tangga serta program kerja OSIS dan MPK sendiri selama satu periode.
                            Seperti halnya pengurus OSIS, seluruh siswa SMA Negeri 1 Katapang berhak untuk menjadi pengurus MPK.
                            Dalam komunikasi sehari-hari, MPK sering disebutkan bersamaan dengan OSIS dengan sebutan MPK-OSIS.</p>
                    </div>
            </div>
        </div><br>
        <button class="button-2 mt-3" onclick="document.getElementById('modal2').style.display='block'">VISI MISI</button>
        <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal2').style.display='none'">&times;</span>
                <h2>VISI MISI</h2>
                <h6>VISI :</h6>
                <p>Mengoptimalkan kinerja MPK sebagai wadah aspirasi siswa dan mempererat hubungan antara siswa dengan siswa dan siswa dengan guru.
                    Serta mengembalikan MPK ke tupoksi MPK itu sendiri.</p>
                <h6>MISI :</h6>
                <p>1. Menampung aspirasi dari siswa</p>
                <p>2. Menyeleksi aspirasi dan Menyampaikannya aspirasi ke pihak sekolah untuk di jalankan oleh OSIS</p>
                <p>3. Mengawasi dan memediasi siswa</p>

            </div>
        </div><br>
        <button class="button-3 mt-3" onclick="document.getElementById('modal3').style.display='block'">STRUKTUR ORGANIGRAM</button>
        <div id="modal3" class="modal">
            <div class="modal-content-3">
                <span class="close" onclick="document.getElementById('modal3').style.display='none'">&times;</span>
                <h6>STRUKTUR ORGANIGRAM</h6>
                <h6>MASA BHAKTI 2023-2024</h6>
                <img src="/img/struktur.jpeg" width="800px" height="600px" class="mt-5"><br>
            </div>
        </div>
        <button class="button-4 mt-3" onclick="document.getElementById('modal4').style.display='block'">KEPENGURUSAN</button>
        <div id="modal4" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal4').style.display='none'">&times;</span>
                <p>Ketua Umum : Naufal Sultan Ammar</p>
                <p>Wakil Ketua : Rizkya Alifa Anugrah</p>
                <p>Sekertaris : Reviani Marwandhani</p>
                <p>Bendahara : Gladis Zahra</p>
                <p>Ketua Komisi 1 : Vara Amelia</p>
                <p>Anggota komisi 1 :</p>
                <ol>1. Adi firman</ol>
                <ol>2. Andhika Tri Putra</ol>
                <ol>3. Debora Ramawati</ol>
                <ol>4. Fajar Lugi</ol>
                <ol>5. Luthfi Auzan Albajili</ol>
                <ol>6. M Fachrezi Diza S</ol>
                <ol>7. M Rifki Ramadhan</ol>
                <ol>8. M Roji Almaliki</ol>
                <ol>9. Nabillah Hafsya Azzahra</ol>
                <ol>10. Rafli Putra Anggara</ol>
                <ol>11.Muhamad Akbar MH</ol>
                <p>Ketua Komisi 2 :Raka Eka Saputra </p>
                <p>Anggota komisi 2 :</p>
                <ol>1. Alika Marshaniswa M</ol>
                <ol>2. Anisa Ramadhan</ol>
                <ol>3. Dava Dwi</ol>
                <ol>4. Diah Ayu Lestari</ol>
                <ol>5. Nabila saskia</ol>
                <ol>6. Rahma Rabbani</ol>
                <ol>7. Sabrina Rizkyani</ol>
                <ol>8. Silva Fatimah</ol>
                <p>Ketua Komisi 3 : Raisa Syauqiyah Aqila Ichsan</p>
                <p>Anggota komisi 3 :</p>
                <ol>1. Aabidah Aliyah</ol>
                <ol>2. Andika Putra</ol>
                <ol>3. Cempaka Arrum</ol>
                <ol>4. Hayu Murtiningsih</ol>
                <ol>5. Kamelia Safarina Nurul Anwar</ol>
                <ol>6. M. Fajar Arifin</ol>
                <ol>7. Moch Yudha Zakaria</ol>
                <ol>8. Muhamad Fiqri Ramadhan</ol>
                <ol>9. Raisa Nabila Alifah</ol>
                <ol>10. Yoga Dwi Adhitiya F</ol>
            </div>
        </div>
        <button class="button-5 mt-3" onclick="document.getElementById('modal5').style.display='block'">PROGRAM KERJA</button>
        <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal5').style.display='none'">&times;</span>
                <h2>PROKER</h2>
                <p>Program :
                <OL>1. Melakukan komunikasi intensif baik individu atau kelompok kelas</OL>
                <ol>2. Mengadakan Rapat/diskusi rutin internal MPK</ol>
                </p>
            </div>
        </div>
    </div>
    <div class="left-container">
        <style>
            h1 {
                background-color: #74838b;
                color: #fff;
                font-family: 'Times New Roman', Times, serif;
                font-size: 28px;
                border-radius: 3px;
            }
        </style>
        <center>
            <h1> JURNAL </h1>
        </center>
        <div class="journal-page">
            <h2>SMKN 1 Katapang jadi Jawara LKS di
                Tingkat Kabupaten sampai Internasional</h2>
            <p>Tanggal: 19 Februari 2023</p>
            <a href="https://majalahsora.com/smkn-1-katapang-sekolah-pusat-keunggulan-dipimpin-agus-kembali-ingin-jadi-jawara-lks-di-tingkat-kabupaten-sampai-internasional/">Lihat selengkapnya</a>
        </div>
        <div class="journal-page">
            <h2>Hasil Pemlihan Ketua MPK Masa Bhakti 2023-2024 SMKN 1 Katapang</h2>
            <p>Tanggal: 21 Februari 2023</p>
            <img src="/img/hasil.png" width="175px" height="150px"><br>
            <a href="/Pages/Jurnalsatu">Lihat selengkapnya</a>
        </div>
        <div class="journal-page">
            <h2>Serah Terima Jabatan Pengurus MPK OSIS "REGENERASI YANG BERINTEGRITAS"</h2>
            <p>Tanggal: 31 Maret 2023</p>
            <img src="/img/serti.jpeg" width="125px" height="70px"><br>
            <a>Lihat selengkapnya</a>
        </div>
        <div class="journal-page">
            <h2>"Laut Bersuara" Pemilihan Pilketos SMKN 1 Katapang</h2>
            <p>Tanggal: 03 Februari 2023</p>
            <a href="https://www.instagram.com/p/CoBakcfPZlc/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==">Lihat selengkapnya</a>
        </div>

    </div>
</div>
</div>

<?= $this->endSection('content'); ?>