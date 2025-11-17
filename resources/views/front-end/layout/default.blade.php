<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Web Prosedur Alat Dasar</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="https://unj.ac.id/wp-content/uploads/2025/02/UNJ-LOGO-512-PX-1.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
        @yield('styles')

        <style>
            :root {
                --bs-primary: #004d4d;
                --accent-color: #004d4d;
            }
            #navmenu ul li a {
                color: #ffffff;        
                text-decoration: none; 
                transition: color 0.3s ease;
            }

            #navmenu ul li a:hover,
            #navmenu ul li a.active {
                color: #FFDD21;        
            }

            .btn-getstarted {
                background-color: #FFDD21 !important; 
                color: #006569 !important;           
                padding: 10px 24px;
                border-radius: 30px;
                font-weight: 600;
                text-decoration: none;
                display: inline-block;
                transition: all 0.3s ease;
            }

            .btn-getstarted:hover {
                background-color: #004d4d;
                color: #ffffff;           
            }

            #apdBtn{
                position:fixed;
                bottom:70px;
                right:25px;
                background:#0c8b79;
                color:white;
                padding:14px 16px;
                border-radius:50%;
                font-size:22px;
                cursor:pointer;
                box-shadow:0 4px 10px rgba(0,0,0,0.2);
                z-index:999;
            }

            #apdModal{
                display:none;
                position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:rgba(0,0,0,0.5);
                z-index:998;
                align-items:center;
                justify-content:center;
            }

            #divModal{
                background:white;
                padding:25px;
                max-width:400px;
                border-radius:12px;
                text-align:center;
            }

            #btnModalApd{
                margin-top:10px;
                padding:10px 20px;
                background:#0c8b79;
                color:white;
                border:none;
                border-radius:8px;
                cursor:pointer;
            }
        </style>
    </head>

    <body class="index-page">
        @include('front-end.layout.components.header')

        @yield('content')

        @include('front-end.layout.components.footer')

        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="apdBtn">🦺</div>

        <div id="apdModal">
            <div id="divModal">
                <h2>⚠️ Peringatan Keselamatan</h2>
                <p style="line-height:1.6;">
                    Sebelum memasuki ruang praktik, pastikan Anda menggunakan APD lengkap dan mematuhi semua aturan keselamatan.
                </p>
                <button onclick="document.getElementById('apdModal').style.display='none'" id="btnModalApd">
                    Saya Mengerti
                </button>
            </div>
        </div>

        <script>
            document.getElementById('apdBtn').onclick = function() {
                document.getElementById('apdModal').style.display = 'flex';
            };
        </script>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>