@extends('layouts/main')

@section('container')
    {{-- Body --}}



    <body class="index-page">
        <main class="main">
            <!-- Hero Section -->
            <section id="beranda" class="hero section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                            <h1 data-aos="fade-up">
                                "Sederhanakan Stok Anda, Maksimalkan Efisiensi Anda."
                            </h1>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Aplikasi Sistem Inventaris Management
                            </p>
                            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                                <a href="/login" class="btn-get-started">Mulai Disini <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->


            <!-- Values Section -->
            <section id="values" class="values section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Kelebihan Kami</h2>
                    <p>Apa yang Kami Sediakan<br /></p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="assets/img/values-1.png" class="img-fluid" alt="" />
                                <h3>Sistem Manajemen Penyimanan</h3>
                                <p>
                                    Mengelola Manajemen penyimpanan dengan Mudah dan aman.
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <img src="assets/img/values-2.png" class="img-fluid" alt="" />
                                <h3>Kemudahan Akses</h3>
                                <p>
                                    Sederhanakan tugas, tingkatkan produktivitas, dan jaga operasional Anda berjalan lancar
                                    hanya dengan beberapa klik.
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <img src="assets/img/values-3.png" class="img-fluid" alt="" />
                                <h3>Efisiensi Waktu</h3>
                                <p>
                                    Cukup dengan login maka semua operasional manajemen anda dapat dilakukan secara digital.
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->
                    </div>
                </div>
            </section>
            <!-- /Values Section -->



            <!-- Features Section -->
            <section id="fitur" class="features section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Fitur</h2>
                    <p>Fitur Lanjutan Kami<br /></p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-5">
                        <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                            <img src="assets/img/features.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-xl-6 d-flex">
                            <div class="row align-self-center gy-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>inovatif</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>profesional</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>interaktif</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Aman</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>dinamis</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                                    <div class="feature-box d-flex align-items-center">
                                        <i class="bi bi-check"></i>
                                        <h3>Efisien</h3>
                                    </div>
                                </div>
                                <!-- End Feature Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Features Section -->



        </main> <br><br>

        <footer id="footer" class="footer">

            <div class="container footer-top">
                <div class="row gy-4">


                    <div class="col-lg-2 col-md-6 footer-about">
                    </div>

                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="/" class="d-flex align-items-center">
                            <span class="sitename">MyIventory</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Aplikasi Manajemen Inventaris</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="/about#tentang-kami">Tentang Kami</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="/login">login</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Pelayanan Kami</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="/">Membuat data Manajemen
                                    Inventaris</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="/">Simpan data Penyimnaan dengan aman</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="/">Kemudahan akses</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container copyright text-center mt-4">
                    <p>
                        <strong class="px-1 sitename">MyIventory</strong>
                    </p>
                    <div class="credits">
                        ©Copyright MyIventory 2024
                    </div>
                </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>


        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
    {{-- End Body --}}
@endsection
