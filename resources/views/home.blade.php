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
                                "Menginspirasi Lewat Tulisan"
                            </h1>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Berkarya dengan Kata, Mengubah Ide Menjadi Artikel Pengetahuan.
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

            <!-- About Section -->
            <section id="tentang-kami" class="about section">
                <div class="container" data-aos="fade-up">
                    <div class="row gx-0">
                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="content">
                                <h3>ArtikelKu</h3>
                                <h2>
                                    Website penyedia layanan Penulisan Artikel dan Kaya Ilmiah, dimana semua orang bisa
                                    Meng-Ekspresikan bakat nya di website ini
                                </h2>
                                <p>
                                    inovatif, profesional, interaktif, informatif, inspiratif, dinamis, terpercaya,
                                    edukatif, menarik, dan Efisien.
                                </p>
                                <div class="text-center text-lg-start">
                                    <a href="#"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Lihat Artikel</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->

            <!-- Values Section -->
            <section id="values" class="values section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Kelebihan Kami</h2>
                    <p>Apa yang paling kami Hargai<br /></p>
                </div>
                <!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="assets/img/values-1.png" class="img-fluid" alt="" />
                                <h3>Bebas Untuk Mengekspresikan bakat melalui tulisan</h3>
                                <p>
                                    Setiap orang dapat melakukan postingan sesuai dengan bakatnya.
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <img src="assets/img/values-2.png" class="img-fluid" alt="" />
                                <h3>Menaikan Personal Branding</h3>
                                <p>
                                    Dengan sering nya membuat artikel maka semakin banyak orang yang akan mengikuti Anda.
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <img src="assets/img/values-3.png" class="img-fluid" alt="" />
                                <h3>Efisien dan Mudah di akses</h3>
                                <p>
                                    Cukup dengan login dan membuat artikel yang menarik, maka Dunia akan mengetahui Bakat
                                    Anda.
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
                                        <h3>informatif</h3>
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
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="d-flex align-items-center">
                            <span class="sitename">Artikelku</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Kelompok</p>
                            <p>Bandung</p>
                            <p class="mt-3">
                                <strong>Telepon:</strong> <span>+62 1234 5678 9</span>
                            </p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Pelayanan Kami</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Pelayanan Kami</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <h4>
                            Ikuti kami</h4>
                        <p>
                            Berita Terbaru seputar ArtikelKu akan selalu di Share di Social Media Berikut
                        </p>
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>
                    © <span>Copyright</span>
                    <strong class="px-1 sitename">ArtikelKu</strong>
                </p>
                <div class="credits">
                    Dirancang oleh <a href="">Kelompok</a>
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
