@extends('front-end.layout.default')
@section('styles')

<style>
    .recommend-thumb {
        width: 100%;
    }

    .recommend-thumb img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }
    .card a {
        color: inherit;
    }
    .card a:hover {
        text-decoration: none;
    }
</style>

@endsection
@section('content')
  <main class="main">

    
    <div class="page-title light-background">
        <div class="container">
            <h1>Daftar Alat</h1>
        </div>
    </div>


    <section id="blog-section" class="blog-section section">
        <div class="container section-title d-none" data-aos="fade-up">
            <h2>Blog</h2>
            <p>Daftar artikel terbaru</p>
        </div>

        <div class="container">
            <div class="row gy-4">

                    @foreach($blog as $item)
                    @php
                        $thumb = getFirstImage($item->body);
                    @endphp
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('blog_detail', $item->slug) }}" class="text-decoration-none">
                            <div class="card h-100 shadow-sm">
                                <div class="recommend-thumb">
                                    <img src="{{ $thumb }}" alt="{{ $item->subtitle }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->subtitle }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
</section>


  </main>
@endsection
