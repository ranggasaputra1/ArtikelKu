<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/dashboard" class="d-flex align-items-center link-body-emphasis text-decoration-none">
            {{-- <img src="assets/img/artikelku.png" alt="Logo" width="20" height="32" class="me-2"> --}}
            <span class="fs-4">ArtikelKu</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 link-body-emphasis text-decoration-none {{ Request::is('dashboard') ? 'active' : '' }}"
                href="/dashboard">Dashboard</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none {{ Request::is('dashboard/posts') ? 'active' : '' }}"
                href="/dashboard/posts">Postingan ArtikelKu</a>


            {{-- Fungsi can ini mengambil dari gates yang ada di file AppServiceProviders --}}
            @can('admin')
                <a class="nav-link d-flex align-items-center{{ Request::is('dashboard/categories') ? 'active' : '' }}"
                    href="/dashboard/categories" style="color: black">
                    | Kategori Postingan |
                </a>
            @endcan
            {{-- End Admin --}}

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link">
                            <span data-feather="log-out"></span> Logout
                        </button>
                    </form>
                </li>
            </ul>

        </nav>
    </div>
</header>
