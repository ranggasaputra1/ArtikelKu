@extends('layouts.main')

@section('container')
    <br><br><br><br><br>
    <div class="container mt-8">
        <h1 class="mb-3 text-center">{{ $header }}</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Kondisi untuk menampilkan Hero --}}

        @if ($posts->count())
            <div class="card mb-4">

                {{-- Dibawah ini adalah kondisi ketika gambar ada diisi oleh user dan jika tidak ada --}}
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                            alt="{{ $posts[0]->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->tittle }}</a></h3>
                    <p>
                        <small class="text-body-secondary">
                            Dibuat Oleh <a href="/posts?author={{ $posts[0]->author->username }}"
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
                        <div class="col-md-4 mb-4">
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
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif


                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->tittle }}</h5>
                                    <small class="text-muted">
                                        Dibuat Oleh <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a> dari Kategori <a
                                            href="/posts?category={{ $posts[0]->category->slug }}"
                                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
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
            <p class="text-center fs-4">Tidak ada postingan dengan Artikel Terkait</p>
        @endif

    </div>


    {{ $posts->links() }}
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
@endsection
