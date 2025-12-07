@extends('front-end.layout.default')
@section('styles')

<style>
    #buttondafsel {
        max-width: 260px;
    }

    @media screen and (max-width:1000px) {
        #kemobile {
            text-align: center;
        }
    }

    @media screen and (max-width:600px) {
        #kemobile {
            text-align: center;
        }

        #buttondafsel {
            font-size: 13px;
            margin-right: 10px;
        }


    }

    @media screen and (max-width:1300px) {
        #tulisangede {
            font-size: 20px;
        }
    }

    @media screen and (max-width:1300px) {
        #tulisangede {
            font-size: 17px;
        }
    }
    
    .leading-5 {
        margin-top: 16px !important;
    }

    .blog-title {
        color: var(--Neutral-100, #212121);
        font-family: Inter;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 36px; /* 150% */
        letter-spacing: -0.24px;
        rgba(33, 33, 33, 1)
    }

    .artikel{
        color: var(--Neutral-80, #616161);
        font-family: Inter;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 27px;
        letter-spacing: -0.003px;
        rgba(97, 97, 97, 1)
    }

</style>

@endsection
@section('content')
    <main class="main">
        <section id="blog">
            <div class="container mt-5 mb-5">
                <div class="row">

                    <div class="col-lg-8">

                        <h1 class="mt-4 blog-title">{{ $blog->title }}</h5>

                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <p>
                                    {{ $blog->created_at->format('d M Y') }}
                                </p>
                            </div>
                            <div class="d-flex" style="gap: 20px">
                                <a href="#">
                                    <img src="{{ asset('assets/img/socmed/whatsapp.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/socmed/facebook.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/socmed/twitter.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/socmed/instagram.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/socmed/linked.png') }}" alt="">
                                </a>
                            </div>
                        </div>
            
                        <div class="mt-4 artikel">
                            {!! $blog->body !!}
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="row">
                            <div class="col-lg-12">
                                <h2 style="padding: 2px 10px;" class="blog-title">
                                    Alat Lainnya
                                </h2>
                            </div>
                        </div>

                        @foreach($recommend as $bv)
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ url('blog') }}/{{ $bv->slug }}" style="text-decoration: none;color: inherit">
                                        <div class="d-flex flex-row-reverse flex-lg-row my-2 my-md-0">

                                            {{-- Konten Teks --}}
                                            <div class="col-6 d-flex align-items-center">
                                                <div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <p>{{ $bv->created_at->format('d M Y') }}</p>
                                                        </div>
                                                    </div>

                                                    <h3 class="title-style-3 blog-title" style="font-size:24px">
                                                        {{ $bv->title }}
                                                    </h3>

                                                    <p style="font-size: 14px;">
                                                        {{ Str::limit(strip_tags($bv->body), 120) }}
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>

                        @endforeach
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
