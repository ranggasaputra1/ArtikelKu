@extends('dashboard.layouts.main')


@section('container')
    {{--  Header Dashboard --}}
    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h3 class="display-6 fw-normal text-body-emphasis">{{ auth()->user()->name }}</h3>
            <p class="fs-5 text-body-secondary">Selamat Datang di Aplikasi ArtikelKu</p>
        </div>
    </header>
    {{-- End Header --}}

    {{-- Main Dashboard --}}
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
                        <a href="/dashboard/posts" class="btn-get-started">Mulai Buat Artikel <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- End Main --}}
@endsection
