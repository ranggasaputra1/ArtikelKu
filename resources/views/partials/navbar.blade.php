{{-- Navbar --}}
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Rangga Saputra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-window-reverse"></i> My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</a>
                    </li></button>
                    </form>

                </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"> <i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            @endauth
            </ul>
        </div>
    </div>
</nav> --}}

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/artikelku.png" alt="artikelku" />
            <h1 class="sitename">ArtikelKu</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="/#beranda"
                        class="nav-link {{ Request::is('/#beranda') ? 'active' : '' }}">Beranda<br /></a>
                </li>
                <li><a href="/about#tentang-kami"
                        class="nav-link {{ Request::is('/about#tentang-kami') ? 'active' : '' }}">Tentang
                        Kami</a></li>
                <li><a href="/fitur#fitur" class="nav-link {{ Request::is('/fitur#fitur') ? 'active' : '' }}">Fitur</a>
                </li>
                <li><a href="/posts" class="nav-link {{ Request::is('/posts#posts') ? 'active' : '' }}">Artikel
                        Terbaru</a>
                </li>
                <li><a href="/categories"
                        class="nav-link {{ Request::is('/categories#categories') ? 'active' : '' }}">Kategori</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="/login">
            <center>Tulis Artikel</center>
        </a>
    </div>


</header>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
{{-- end navbar --}}
