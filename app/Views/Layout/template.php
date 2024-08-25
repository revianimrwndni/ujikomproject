<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/style.css') ?>">
    <script src="/js/main.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNav">
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
                    <li class="nav-item"><a class="nav-link" href="/Pages/Alumni">ALUMNI</a></li>
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
    <?= $this->renderSection('content'); ?>

    <!--Footer-->
    <footer class="footer py-5">
        <div class="wave">
            <div class="footer before container px-8">

                <p class="m-0 text-center text-white">Copyright &copy; MPK 2023</p>


            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>