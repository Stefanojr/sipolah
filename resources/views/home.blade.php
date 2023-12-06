<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->

    <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://media.suara.com/pictures/970x544/2020/01/16/99993-ilustrasi-sampah-plastik-menumpuk-shutterstock.jpg');
            background-repeat: repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://www.gurupendidikan.co.id/wp-content/uploads/2019/12/Daur-Ulang.jpg');
            background-repeat: repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }

            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 50vh;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" href="/home">
                    <strong>SIPOLAH</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#intro">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register" rel="nofollow">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Icons -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Carousel wrapper -->
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h1 class="mb-3">Selamat Datang Pada Website SIPOLAH</h1>
                                <h5 class="mb-4">Pengelolaan bank sampah anda menjadi lebih mudah</h5>
                                <a class="btn btn-outline-light btn-lg m-2" href="/login" role="button"
                                    rel="nofollow">Sign In</a>
                                <a class="btn btn-outline-light btn-lg m-2" href="/register" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>You can place here any content</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="mask"
                        style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>And cover it with any mask</h2>
                                <a class="btn btn-outline-light btn-lg m-2"
                                    href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                                    role="button">Learn about masks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                            <img src="https://i.pinimg.com/564x/27/5b/91/275b91e823397dc9e4502b53e7940c83.jpg"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>"Masyarakat Semakin Peduli, Penanganan Sampah Meningkat"</strong></h4>
                        <p class="text-muted">
                            Jakarta, 28 Oktober 2023 - Di tengah keprihatinan global terkait masalah sampah, masyarakat
                            Indonesia semakin peduli dan berperan aktif dalam penanganan sampah. Upaya peningkatan
                            kesadaran terhadap dampak negatif sampah terhadap lingkungan dan kesehatan semakin terasa.
                            Pemerintah dan masyarakat bekerja sama untuk mengatasi permasalahan ini.
                            Pemerintah Indonesia telah mengambil langkah-langkah nyata dalam mengelola sampah. Program
                            pemerintah dalam pembuatan TPA (Tempat Pembuangan Akhir) yang terkelola dengan baik dan
                            kampanye pengurangan penggunaan plastik sekali pakai telah menjadi sorotan positif. Namun,
                            perubahan nyata datang dari masyarakat itu sendiri. Mayoritas orang Indonesia saat ini
                            memiliki kesadaran lebih tinggi terhadap pentingnya daur ulang dan pemilahan sampah.
                        </p>
                        <p><strong>Pesan Motivasi: "Bersama-sama Kita Bisa Membuat Perbedaan!"</strong></p>
                        <p class="text-muted">
                            Dalam upaya kita untuk mengatasi masalah sampah, setiap individu memiliki peran penting.
                            Tidak perlu menunggu tindakan besar dari pihak lain. Dengan tindakan sederhana seperti
                            memilah sampah, mendaur ulang, dan mengurangi penggunaan plastik sekali pakai, kita dapat
                            memberikan kontribusi berarti untuk menjaga lingkungan dan menciptakan dunia yang lebih
                            bersih dan berkelanjutan. Ingatlah bahwa perubahan dimulai dari diri kita sendiri, dan
                            dengan kolaborasi, kita dapat mencapai perubahan yang positif. Jadi, mari bersatu dalam
                            upaya menjaga bumi kita bersih dan hijau.
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Article</strong></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/04/f3/24/04f32445d0a0938acfac8e7d08a1afba.jpg"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">"Dampak Sampah Plastik Terhadap Lingkungan"</h5>
                                <p class="card-text">
                                    Sampah plastik adalah masalah serius yang mengancam lingkungan kita. Sampah plastik
                                    yang terbuang sembarangan dapat mencemari laut, mengancam kehidupan laut, dan
                                    merusak ekosistem. Sampah plastik juga memicu masalah perubahan iklim karena proses
                                    produksi plastik melepaskan gas rumah kaca. Oleh karena itu, penting bagi kita semua
                                    untuk mengurangi penggunaan plastik sekali pakai dan mendaur ulang plastik untuk
                                    melindungi lingkungan.
                                </p>
                                <a href="#!" class="btn btn-primary">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/8e/29/a9/8e29a9f40f6403254376fd1e716f2384.jpg"
                                    class="img-fluid" style="width: 400px; height: 600;" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">"Manajemen Sampah di Kota: Tantangan dan Solusi"</h5>
                                <p class="card-text">
                                    Kota-kota di seluruh dunia menghadapi tantangan dalam manajemen sampah. Penumpukan
                                    sampah yang tidak terkelola dapat menciptakan masalah kesehatan masyarakat dan
                                    lingkungan. Salah satu solusi adalah meningkatkan daur ulang dan kompos, serta
                                    mengurangi pemborosan. Pemerintah dan masyarakat harus bekerja sama dalam mengelola
                                    sampah untuk menciptakan kota yang bersih, sehat, dan berkelanjutan.
                                </p>
                                <a href="#!" class="btn btn-primary">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="https://i.pinimg.com/564x/58/77/c9/5877c9b85940306e235999e7e941bc7a.jpg"
                                    class="img-fluid" style="width: 400px; height: 600;" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">"Pentingnya Pendidikan Lingkungan tentang Sampah"</h5>
                                <p class="card-text">
                                    Pendidikan lingkungan yang menyeluruh adalah kunci untuk mengatasi masalah sampah.
                                    Penting bagi sekolah dan lembaga pendidikan untuk mengajarkan anak-anak dan generasi
                                    mendatang tentang pentingnya merawat lingkungan, termasuk mengelola sampah dengan
                                    benar. Melalui pemahaman yang lebih baik tentang dampak sampah, kita dapat mengubah
                                    perilaku dan menciptakan masyarakat yang lebih peduli terhadap lingkungan.
                                </p>
                                <a href="#!" class="btn btn-primary">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="/home">sipolah.com</a>
            </div>
            <!-- Copyright -->
            </footer>
            <!--Footer-->
            <!-- MDB -->
            <script type="text/javascript" src="js/mdb.min.js"></script>
            <!-- Custom scripts -->
            <script type="text/javascript" src="js/script.js"></script>
            <script src="/bootstrap-5.3.2-dist/js/bootstrap.js"></script>
</body>

</html>
