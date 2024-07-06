<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>Artikelku | {{ $tittle }}</title>


    {{-- Bootstrap Css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Style Css --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- Gambar --}}
    <link href="assets/img/favicon.png" rel="icon" />
</head>

<body>


    <div class="container mt-4">{{-- Body --}}
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <h2 class="mb-3">{{ $post->tittle }}</h2>

                    <p>Artikel dibuat oleh <a href="/posts?author={{ $post->author->name }}"
                            class="text-decoration-none">{{ $post->author->name }} </a>
                        ({{ $post->author->email }}) dari
                        Kategori <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a></p>

                    {{-- Dibawah ini adalah kondisi ketika gambar ada dan juga tidak ada --}}

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    @endif


                    <article class="my-3 fs-6">
                        <p>{!! $post->body !!}</p>
                    </article>
                    <a href="/posts" class="d-block mt-3">kembali ke Seluruh Artikel</a>
                </div>
            </div>
        </div>
        {{-- End Body --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
