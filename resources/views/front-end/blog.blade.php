@extends('front-end.layout.default')
@section('styles')

<style>
    
</style>

@endsection
@section('content')
  <main class="main">

    
    <div class="page-title light-background">
        <div class="container">
            <h1>Daftar Alat</h1>
                <!-- <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Starter Page</li>
                    </ol>
                </nav> -->
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
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 shadow-sm">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text text-muted" style="font-size: 14px;">
                                {{ Str::limit(strip_tags($item->body), 120) }}
                            </p>

                            <a href="{{ route('blog_detail', $item->slug) }}" class="btn btn-primary btn-sm mt-2">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</section>


  </main>
@endsection
