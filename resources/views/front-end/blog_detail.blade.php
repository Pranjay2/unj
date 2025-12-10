@extends('front-end.layout.default')
@section('styles')
<style>
    .blog-title {
        color: #212121;
        font-family: Inter, system-ui, sans-serif;
        font-size: 32px;
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: -0.24px;
        margin-bottom: 8px;
    }

    .artikel {
        color: #444;
        font-family: Inter, system-ui, sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.7;
        letter-spacing: -0.003px;
    }

    /* Paragraphs */
    .artikel p {
        margin-bottom: 18px;
    }

    /* Auto-beautify images */
    .artikel img,  {
        /*max-width: 100%;
        height: auto;*/
        display: block;
        margin: 22px auto;
        border-radius: 10px;
        box-shadow: 0 8px 22px rgba(0,0,0,0.08);
    }

    .artikel iframe {
        display: block;
        margin: 22px auto;
        border-radius: 10px;
        box-shadow: 0 8px 22px rgba(0,0,0,0.08);
        border: none;
    }

    /* Blockquote */
    .artikel blockquote {
        margin: 22px 0;
        padding: 14px 18px;
        background: #f3f6ff;
        border-left: 4px solid #006569;
        border-radius: 8px;
        color: #1a2a55;
        font-style: normal;
    }

    /* Code / Pre */
    .artikel pre,
    .artikel code {
        background: #0d1b2a;
        color: #e0e6ef;
        padding: 14px;
        font-size: 15px;
        border-radius: 10px;
        overflow-x: auto;
        font-family: ui-monospace, monospace;
        margin: 18px 0;
        display: block;
    }

    /* Responsive heading inside content */
    .artikel h2, .artikel h3, .artikel h4 {
        margin-top: 30px;
        margin-bottom: 12px;
        font-weight: 700;
        color: #1a1a1a;
    }

    /* Footer author/date section */
    .meta-text {
        color: #616161;
        font-size: 14px;
        margin-top: 2px;
    }

    /* LIST (ul/ol) */
    .artikel ul, .artikel ol {
        padding-left: 24px;
        margin-bottom: 18px;
    }

    /* --- IMAGE RESPONSIVE FIX --- */
    .artikel img {
        /*height: auto !important;
        width: auto !important;*/
        max-width: 100% !important;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 640px) {
        .blog-title {
            font-size: 26px;
        }
        .artikel {
            font-size: 17px;
        }
    }

    .recommend-thumb {
        width: 100%;
    }

    .recommend-thumb img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 16px;
    }

    /* --- PREMIUM ARTICLE UPGRADE --- */

    /* Stylish H2 */
    .artikel h2 {
        font-size: 28px;
        border-left: 5px solid #006569;
        padding-left: 14px;
        margin-top: 40px;
        margin-bottom: 16px;
        color: #111;
        letter-spacing: -0.4px;
    }

    /* Stylish H3 */
    .artikel h3 {
        font-size: 24px;
        margin-top: 32px;
        color: #222;
    }

    /* Stylish H4 */
    .artikel h4 {
        font-size: 20px;
        margin-top: 28px;
        color: #333;
    }

    /* Paragraph improvement */
    .artikel p {
        color: #2c2c2c;
        line-height: 1.75;
        margin-bottom: 22px;
    }

    /* Highlight text */
    .artikel mark {
        background: #fff3a3;
        padding: 3px 6px;
        border-radius: 4px;
    }

    /* Horizontal rule upgrade */
    .artikel hr {
        border: none;
        border-top: 1px solid #e4e4e4;
        margin: 34px 0;
    }

    /* Premium Blockquote */
    .artikel blockquote {
        background: #eef4ff;
        border-left: 6px solid #006569;
        padding: 18px 22px;
        border-radius: 12px;
        color: #062a5e;
        font-size: 18px;
        font-style: italic;
        margin: 30px 0;
    }

    /* Premium image look */
    .artikel img {
        border-radius: 16px !important;
        box-shadow: 0px 14px 32px rgba(0,0,0,0.12) !important;
    }

    /* Premium list spacing */
    .artikel ul li,
    .artikel ol li {
        margin-bottom: 10px;
        padding-left: 2px;
    }

    /* Table styling */
    .artikel table {
        width: 100%;
        margin: 22px 0;
        border-collapse: collapse;
        overflow: hidden;
        border-radius: 12px;
    }

    .artikel table th {
        background: #f3f6ff;
        padding: 12px;
        border-bottom: 2px solid #d5ddff;
        text-align: left;
    }

    .artikel table td {
        padding: 12px;
        border-bottom: 1px solid #eee;
    }

    /* Code block premium */
    .artikel pre {
        background: #0d1b2a !important;
        padding: 20px !important;
        border-radius: 14px !important;
        font-size: 16px !important;
        color: #dff1ff !important;
    }

    /* Make first paragraph nicer */
    .artikel > p:first-of-type {
        font-size: 20px;
        font-weight: 500;
        color: #222;
    }
</style>
@endsection


@section('content')
<main class="main">
    <section id="blog">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-12">
                    {{-- Judul Artikel --}}
                    <h1 class="mt-4 blog-title">{{ $blog->title }}</h1>
                    {{-- Tanggal & Social Share --}}
                    <div class="d-flex justify-content-between mt-3">
                        <div class="meta-text">
                            {{ $blog->created_at->format('d M Y') }}
                        </div>

                        <div class="d-flex" style="gap: 20px">
                            <a href="#"><img src="{{ asset('assets/img/socmed/whatsapp.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/socmed/facebook.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/socmed/twitter.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/socmed/instagram.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/socmed/linked.png') }}" alt=""></a>
                        </div>
                    </div>
                    {{-- Isi Artikel --}}
                    <div class="mt-4 artikel">
                        {!! $blog->body !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection