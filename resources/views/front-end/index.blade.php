@extends('front-end.layout.default')
@section('styles')

<style>
    .guide-section {
        background: #ffffff;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 6px 20px rgba(24, 40, 60, 0.06);
    }
    .guide-header {
        display:flex;
        align-items:center;
        gap:12px;
        margin-bottom: 18px;
    }
    .guide-header .icon {
        width:48px;
        height:48px;
        border-radius:50%;
        background:#e9f5ff;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:22px;
        color:#0d6efd;
    }
    .step-title { font-weight:600; }
    .small-note { font-size:13px; color:#6c757d; }
    @media (max-width:575px){
        .guide-header { gap:10px; }
    }
</style>

@endsection
@section('content')
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="btn-getstarted mb-4">
                        <i class="bi bi-gear-fill me-2"></i>
                        Working for your success
                    </div>
                    <h1 class="mb-4" style="font-size: 2.5em !important;">
                        Selamat Datang di Website Prosedur Penggunaan Alat Dasar
                    </h1>
                    <p class="mb-4 mb-md-5">
                        Panduan interaktif penggunaan alat praktik dasar di Laboratorium Pendidikan Teknik Bangunan UNJ, untuk mendukung pembelajaran yang lebih mudah dan mandiri.
                    </p>
                    <div class="hero-buttons">
                        <a href="#about" class="btn btn-getstarted me-0 me-sm-2 mx-1 d-none">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row stats-row gy-4 mt-5 justify-content-around text-center" data-aos="fade-up" data-aos-delay="500">
            <div class="col-lg-2 col-md-5">
                <div class="stat-item">
                    <div class="stat-icon"><i class="bi bi-trophy"></i></div>
                    <div class="stat-content">
                        <h5>Ilmu Ukur Tanah</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <div class="stat-item">
                    <div class="stat-icon"><i class="bi bi-briefcase"></i></div>
                    <div class="stat-content">
                        <h5>Praktik Plumbing</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <div class="stat-item">
                    <div class="stat-icon"><i class="bi bi-graph-up"></i></div>
                    <div class="stat-content">
                        <h5>Praktik Batu Beton</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <div class="stat-item">
                    <div class="stat-icon"><i class="bi bi-award"></i></div>
                    <div class="stat-content">
                        <h5>Praktik Mekanika Tanah</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-5">
                <div class="stat-item">
                    <div class="stat-icon"><i class="bi bi-award"></i></div>
                    <div class="stat-content">
                        <h5>Praktik Uji Bahan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta">MORE ABOUT US</span>
                <h2 class="about-title">Web Prosedur Alat Dasar</h2>
                <p class="about-description">Website ini dirancang untuk memudahkan Anda dalam memahami, mempelajari, dan melaksanakan <strong>prosedur penggunaan alat</strong> secara tepat dan aman. Temukan panduan langkah demi langkah, ilustrasi untuk menunjang kegiatan praktikum maupun pekerjaan Anda.</p>

                <h5>Prosedur Pengunaan Web</h5>
                <div class="row feature-list-wrapper">
                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Pilih Alat yang Ingin Digunakan</li>
                            <li><i class="bi bi-check-circle-fill"></i> Baca Informasi Alat</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ikuti Prosedur Penggunaan</li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="info-wrapper">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="profile d-flex align-items-center gap-3">
                                <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                                <div>
                                    <h4 class="profile-name">Mario Smith</h4>
                                    <p class="profile-position">CEO &amp; Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-info d-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <div>
                                    <p class="contact-label">Call us anytime</p>
                                    <p class="contact-number">+123 456-789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper">
                    <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                        <img src="assets/img/lab-plambing.jpeg" alt="Business Meeting" class="img-fluid main-image rounded-4">
                        <img src="assets/img/showing-building-blueprint.jpg" alt="Team Discussion" class="img-fluid small-image rounded-4">
                    </div>
                    <!-- <div class="experience-badge floating">
                        <h3>15+ <span>Years</span></h3>
                        <p>Of experience in business service</p>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Categories</h2>
        <!-- <p>Web ini mencakup 5 mata pelajaran, yaitu</p> -->
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-activity"></i>
                    </div>
                    <div>
                        <h3>Ilmu Ukur Tanah</h3>
                        <p>Mata pelajaran yang mempelajari cara melakukan pengukuran di lapangan, seperti mengukur jarak, sudut, dan elevasi tanah. Materi ini penting untuk membuat peta, denah, dan perencanaan konstruksi.</p>
                        <a href="service-details.html" class="read-more">Lihat Prosedur Alat Dasar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                    <div>
                        <h3>Praktik Plumbing</h3>
                        <p>Membahas dan melatih keterampilan pemasangan serta perawatan sistem perpipaan, baik untuk air bersih, air kotor, maupun instalasi sanitasi. Fokusnya pada teknik kerja pipa sesuai standar keselamatan dan kenyamanan.</p>
                        <a href="service-details.html" class="read-more">Lihat Prosedur Alat Dasar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-easel"></i>
                    </div>
                    <div>
                        <h3>Praktik Batu Beton</h3>
                        <p>Berisi praktik pembuatan dan pengujian konstruksi dari batu dan beton. Peserta didik belajar cara membuat campuran beton, uji kualitas, hingga penerapan dalam pekerjaan dinding dan struktur sederhana.</p>
                        <a href="service-details.html" class="read-more">Lihat Prosedur Alat Dasar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div>
                        <h3>Praktik Mekanika Tanah</h3>
                        <p>Mempelajari sifat-sifat tanah melalui uji laboratorium dan lapangan. Tujuannya agar siswa mampu menganalisis kekuatan tanah, daya dukung, dan perilaku tanah terhadap beban konstruksi.</p>
                        <a href="service-details.html" class="read-more">Lihat Prosedur Alat Dasar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End Service Card -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card d-flex">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <div>
                        <h3>Praktik Uji Bahan</h3>
                        <p>Fokus pada pengujian material bangunan (seperti semen, baja, beton, dan kayu) untuk mengetahui kualitas, kekuatan, serta kelayakan penggunaannya dalam konstruksi.</p>
                        <a href="service-details.html" class="read-more">Lihat Prosedur Alat Dasar <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End Service Card -->

        </div>

    </div>

</section><!-- /Services Section -->

</main>
@endsection
