<html lang="en">
<style>
    .navbar {
        background-color: transparent;
        border: none;


    }

    navbar-nav.ml-auto {
        margin-left: 0;


    }

    navbar-nav {
        display: flex;
        flex-direction: row;

    }




    h1 {
        color: #000000;
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 38px;
    }

    h5 {
        color: #335f85;
    }

    h2 {
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    h4 {
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    li {
        margin: 0 10px;
        font-size: 18px;
    }

    nav ul li {
        float: left;
    }

    .navbar-nav li a {
        color: #fff;
        font-size: 12px;
        float: left;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        background: linear-gradient(to right, #87a7b9, );
        border-radius: 8PX;
        min-width: 20px;

    }

    .dropdown-menu {
        display: none;
        position: absolute;
        z-index: 1;
        background: linear-gradient(to right, #87a7b9, #8ebcd1, #8bb0d1);
        min-width: 20px;
        box-shadow: 0px 6px 12px 0px rgba(255, 255, 255, 0.2);
    }

    .dropdown-menu a {
        color: rgb(255, 255, 255);
        padding: 10px 12px;
        text-decoration: none;
        display: block;
    }

    a {
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 2px;

    }

    btn {
        margin: 10px;
        padding: 5px 10px;
        background-color: #4CAF50;
        border: none;

        cursor: pointer;
        border-radius: 5px;
    }

    /* CSS untuk tampilan halaman */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-size: cover;
    }

    .header {
        background-size: cover;
        background-image: url("/img/barulagi.jpg");
        background-position: center;
        text-align: center;
        padding: 250px;
        color: #fff;
    }



    .header h1 {
        font-size: 36px;
    }

    .content {
        padding: 50px;
        text-align: center;
    }


    /* Efek gelombang pada gambar */


    .button {
        background-color: #74838b;
        border: none;
        color: white;
        font-size: 16px;
        padding: 10px 45px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease-in-out;
        border-radius: 8px;
    }

    footer {
        background: linear-gradient(to right, #74838b, #8ebcd1, #303e4b);
        padding: 20px;
        box-shadow: 1px 1px 2px hsla(0, 0%, 100%, 0.267);
        position: relative;


    }




    .my-section {

        /* Ganti dengan warna latar belakang yang diinginkan */
        padding: 20px;
    }

    /* Animasi untuk header title */
    .header-title {
        position: relative;
        animation-name: move;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: bold;
    }

    p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-bottom: 1em;
        /* Mengatur jarak bawah setiap paragraf */
        line-height: 1.5;
        /* Mengatur ketinggian baris */
        font-size: 18px;
        /* Mengatur ukuran font */
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        /* Mengatur jenis font */
    }


    /* Definisi animasi */
    @keyframes move {
        from {
            left: 0;

        }

        to {
            left: 50px;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CUSTOM CSS -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="/img/MPK.png" style="width:35px;" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Pages/Profil">PROFIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Pages/Ekskul">EKSKUL</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ALUMNI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Pages/Alumni">Masa Bhakti 2022-2023</a></li>
                            <li><a class="dropdown-item" href="">Masa Bhakti 2021-2022</a></li>

                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/Pages/Aspirasi">KOTAK ASPIRASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Pages/Lainnya">LAINNYA</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--CONTENT YAA-->
    <div class="header">
        <h1 class="header-title">Selamat Datang di Website Resmi</h1>
        <p> Majelis Permusyawaratan Kelas SMK Negeri 1 Katapang</p>
        <div class="content">
            <style>
                a {
                    color: rgb(255, 255, 255);
                    text-decoration: none;
                    font-size: 8px;
                    font-family: Arial, sans-serif;

                }
            </style>
            <a class="button" href="/Pages/Profil">MASA BHAKTI 2023-2024</a>
        </div>
    </div>
    <!-- Team-->
    <section class="mt-5" id="team">
        <div class="container">
            <div class="text-center">
                <h2>MENGENAL MPK</h2>
                <h3>Apa itu Majelis Permusyawaratan Kelas? </h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="mx-auto rounded-circle" src="/img/MPK.png" style="width:175px;" />
                </div>
                <div class="col-lg-6 mx-auto mt-3">
                    <p class="large">Majelis Permusywaratan Kelas (MPK) adalah lembaga legislatif siswa yang juga mengawasi OSIS. MPK berfungsi sebagai aspirator dari seluruh warga SMA Negeri 1 Katapang, evaluator kerja dan kinerja OSIS dalam satu periode,
                        dan planner untuk merencanakan Anggaran Dasar dan Anggaran Rumah Tangga serta program kerja OSIS dan MPK sendiri selama satu periode.
                        Seperti halnya pengurus OSIS, seluruh siswa SMA Negeri 1 Katapang berhak untuk menjadi pengurus MPK.
                        Dalam komunikasi sehari-hari, MPK sering disebutkan bersamaan dengan OSIS dengan sebutan MPK-OSIS.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Services-->
    <section class="my-section mt-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">MENGENAL KOMISI MPK</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">KOMISI 1</h4>
                    <p class=" large">Fungsi utama dari komisi Kaderisasi ini adalah mempersiapkan orang – orang (para junior) yang nantinya harus mengikuti diklat kepemimpinan.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="my-3">KOMISI 2</h4>
                    <p class=" large">komisi II administrasi MPK adalah sebagai audit keuangan dan surat menyurat yang ada di setiap ekstrakurikuler maupun di OSIS. Hal ini dilakukan agar tidak terjadi kecurangan,
                        atau hal lainnya dalam sesi keuangan ataupun dalam surat menyurat dan supaya laporan pertanggungjawaban OSIS tidak cuap – cuap semata.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">KOMISI 3</h4>
                    <p class=" large">Fungsi utama komisi ini adalah komisi yang bisa membawahi seluruh sekbid di OSIS dan seluruh ekskul. Seluruh daftar dari seluruh ekskul dan dari setiap sekbid OSIS diberikan kopiannya kepada komisi keilmuan.
                        Hal ini dilakukan agar seluruh program – program yang ada jauh lebih terkontrol.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="large text-white">About Us</h3>
                    <p class="large text-white">Kampus SMK Negeri 1 Katapang</p>
                    <p class="large text-white">Jalan Ceuri Jalan Terusan Kopo No.KM 13.5, Katapang, Kec. Katapang, Bandung,
                        Jawa Barat 40971</p>
                </div>
                <div class="col-md-6">
                    <h3 class="large text-white">Social Media</h3>
                    <ul class="social-media">
                        <li class="large text-white"><a href="https://smkn1katapang-bdg.sch.id/blank" target="_blank"><i class="fab fa-twitter"></i>WEBSITE SMKN 1 KATAPANG</a></li>
                        <li class="large text-white"><a href="https://www.instagram.com/mpk.smkn1katapang/" target="_blank"><i class="fab fa-instagram"></i>INSTAGRAM MPK</a></li>
                        <li class="large text-white"><a href="https://www.youtube.com/@smkn1katapang242" target="_blank"><i class="fab fa-youtube"></i>YOUTUBE</a></li>
                    </ul>
                    <p class="m-0 text-center text-white">Copyright &copy; MPK 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>