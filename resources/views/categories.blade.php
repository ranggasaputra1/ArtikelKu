@extends('layouts.main')

@section('container')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <br><br><br><br>
    {{-- Body Categories --}}
    <center>
        <h1 class="mb-5">Kategori Postingan</h1>
    </center>

    <style>
        .btn-card {
            padding: 1.5rem;
            border-radius: 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-card:hover {
            background-color: #007bff;
            color: white;
        }

        .bg-color-1 {
            color: #ff6f61;
            border-color: #ff6f61;
        }

        .bg-color-2 {
            color: #6b5b95;
            border-color: #6b5b95;
        }

        .bg-color-3 {
            color: #88b04b;
            border-color: #88b04b;
        }

        .bg-color-4 {
            color: #ffcc5c;
            border-color: #ffcc5c;
        }

        .bg-color-5 {
            color: #96ceb4;
            border-color: #96ceb4;
        }

        .bg-color-6 {
            color: #d9534f;
            border-color: #d9534f;
        }
    </style>
    </head>

    <body>
        <div class="container my-5">
            <div class="row g-4">
                @foreach ($categories as $category)
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                        <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
                            <div
                                class="btn btn-outline-primary btn-card bg-color-{{ ($loop->index % 6) + 1 }} d-flex align-items-center justify-content-center">
                                <h5 class="text-center fs-4 mb-0">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

        {{-- End Body --}}
    @endsection
