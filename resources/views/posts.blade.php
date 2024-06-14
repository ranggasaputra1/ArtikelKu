@extends('layouts.main')

@section('container')
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <br><br><br><br><br>
    <div class="container mt-8" data-aos="fade-up" data-aos-duration="700">
        <h1 class="mb-3 text-center" data-aos="fade-down" data-aos-duration="700">{{ $header }}</h1>
        <center data-aos="zoom-in" data-aos-duration="700">
            @if (request('author'))
                <small>
                    <p>{{ $posts->count() ? $posts[0]->author->name . ' Menulis ' . $postCount . ' Artikel' : 'Tidak ada postingan oleh penulis terkait' }}
                    </p>
                </small>
            @endif
            @if (request('category'))
                <small>
                    <p>{{ $posts->count() ? $categoryPostCount . ' Artikel dari kategori ' . $posts[0]->category->name : 'Tidak ada postingan dari kategori terkait' }}
                    </p>
                </small>
            @endif
        </center>

        <div class="row justify-content-center mb-3" data-aos="fade-right" data-aos-duration="700">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Artikel..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Kondisi untuk menampilkan Hero --}}
        @if ($posts->count())
            <div class="card mb-4" data-aos="flip-left" data-aos-duration="700">
                {{-- Dibawah ini adalah kondisi ketika gambar ada diisi oleh user dan jika tidak ada --}}
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                            alt="{{ $posts[0]->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ urlencode($posts[0]->category->name) }}"
                        class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->tittle }}</a></h3>
                    <p>
                        <small class="text-body-secondary">
                            Dibuat Oleh <a href="/posts?author={{ $posts[0]->author->name }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> dari Kategori <a
                                href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya...</a>
                </div>
            </div>

            {{-- End Hero --}}

            {{-- Foreach Untuk Card --}}
            <div class="col">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="card">
                                <div class="position-absolute px-3 py-2 text-white"
                                    style="background-color: rgba(0, 0, 0, 0.7)"><a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none">{{ $post->category->name }}</a> </div>

                                {{-- Dibawah ini adalah kondisi ketika gambar ada diisi oleh user dan jika tidak ada --}}
                                @if ($post->image)
                                    <div style="max-height: 350px; overflow:hidden">
                                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                            alt="{{ $post->category->name }}">
                                    </div>
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ urlencode($post->category->name) }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->tittle }}</h5>
                                    <small class="text-muted">
                                        Dibuat Oleh <a href="/posts?author={{ $post->author->name }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a> dari Kategori <a
                                            href="/posts?category={{ $post->category->slug }}"
                                            class="text-decoration-none">{{ $post->category->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- End Foreach Untuk Card --}}
        @else
            <p class="text-center fs-4" data-aos="fade-in" data-aos-duration="700">Tidak ada postingan dengan Artikel
                Terkait</p>
        @endif
    </div>

    {{ $posts->links() }}
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
@endsection
