<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Grand Sentosa Land</title>
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="keywords"
        content="Perumahan Grand Sentosa Land, Perumahan Surabaya, Perumahan Sidoarjo, Rumah dijual" />
    <meta name="description"
        content="Perumahan Grand Sentosa Land. Pilihan perumahan terbaik di Surabaya dan Sidoarjo dengan fasilitas lengkap dan lingkungan yang nyaman." />
    <meta name="robots" content="index, follow" />
    <meta property="og:title" content="Grand Sentosa Land" />
    <meta property="og:description"
        content="Perumahan Grand Sentosa Land. Pilihan perumahan terbaik di Surabaya dan Sidoarjo dengan fasilitas lengkap dan lingkungan yang nyaman." />
    <meta property="og:image" content="https://grandsentosaland.info/img/logo.png" />
    <meta property="og:url" content="https://grandsentosaland.info/" />
    <meta property="og:type" content="website" />
    <script src="https://kit.fontawesome.com/f0a17157c3.js" crossorigin="anonymous"></script>
    <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "Grand Sentosa Land",
                "url": "https://grandsentosaland.info/",
                "logo": "https://grandsentosaland.info/img/logo.png",
                "description": "Perumahan Grand Sentosa Land. Pilihan perumahan terbaik di Surabaya dan Sidoarjo dengan fasilitas lengkap dan lingkungan yang nyaman."
            }
        </script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/need.css') }}" rel="stylesheet" />
    @yield('style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="{{ asset('img/logo-1.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#products" class="nav-item nav-link">Produk</a>
                    <a href="#info" class="nav-item nav-link">Info</a>
                    <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                    <a href="#testimoni" class="nav-item nav-link">Testimoni</a>
                    <a href="#faq" class="nav-item nav-link">FAQ</a>
                </div>
                <a href="https://wa.me/+6281335215789?text=Hallo, saya mohon di bantu info lengkap Grand Sentosa Land?"
                    target="_blank" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">
                    <i class="fa-brands fa-whatsapp fs-4" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Info lebih lanjut"></i></a>
            </div>
        </nav>
    </div>
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08)">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4 justify-content-start">
                    <div class="footer-item">
                        <a href="index.html" class="p-0 mb-4">
                            <div class="container">
                                <img src="{{ asset('img/logo-1.png') }}" style="width: 85%" alt="Logo" />
                            </div>
                        </a>
                        <a href="https://www.google.com/maps?q=place_id:ChIJrc-ZE-vl1y0R_6emc94LpaU">
                            <p class="mb-4">Perumahan Grand Sentosa Land. Jalan Dadapan 5, Segoro Tambak, Sedati
                                Sidoarjo - Jawa Timur 61253</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-8 d-flex justify-content-end">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <a href="https://www.google.com/maps?q=place_id:ChIJrc-ZE-vl1y0R_6emc94LpaU">
                                <p class="text-white mb-0">Perumahan Grand Sentosa Land</p>
                            </a>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">grandsentosalandsby@gmail.com</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+62) 081335215789</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" target="_blank"
                                href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                    class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" target="_blank"
                                href="https://x.com/staff_GMansion?t=3W17WgIIDTyQzIhQoFPOgw&s=09"><i
                                    class="fa-brands fa-x-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" target="_blank"
                                href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                    class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" target="_blank"
                                href="https://www.tiktok.com/@grand.sentosa.land?is_from_webapp=1&sender_device=pc"><i
                                    class="fa-brands fa-tiktok text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body">
                        <a href="https://grandsentosaland.info/" class="border-bottom text-white"> <i
                                class="fas fa-copyright text-light me-2"></i>Grand Sentosa Land</a>, All right
                        reserved.
                    </span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    <!-- the original credits as per the license -->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Edited
                    By <a class="border-bottom text-white" href="https://github.com/Paksiswanto">PakSiswanto</a>
                    <br />
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright End -->

    <div class="floating_btn" style="cursor: pointer">
        <a onclick="wa()">
            <div class="contact_icon">
                <i class="fab fa-whatsapp my-float"></i>
            </div>
        </a>
        <p class="text_icon">Butuh bantuan?</p>
    </div>

    <div class="modal fade modal-tipe" data-img="{{ asset('img/isi-modal-1.jpg') }}" id="modal-florance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tipe Florence</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery-container">
                                <div class="main-image">
                                    <img src="img/isi-modal-1.jpg" loading="lazy" class="mainImage" alt="Main Image" />
                                </div>
                                <div class="spinner-border mt-3 text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="thumbnails" style="display: none">
                                    <div><img src="{{asset('img/florance/img-1.webp')}}" loading="lazy" data-large="{{asset('img/florance/img-1.webp')}}" alt="Thumbnail 1" /></div>
                                    <div><img src="{{asset('img/florance/img-2.webp')}}" alt="Thumbnail 2" loading="lazy" data-large="{{asset('img/florance/img-2.webp')}}" /></div>
                                    <div><img src="{{asset('img/florance/img-3.webp')}}" alt="Thumbnail 3" loading="lazy" data-large="{{asset('img/florance/img-3.webp')}}" /></div>
                                    <div><img src="{{asset('img/florance/img-4.webp')}}" loading="lazy" data-large="{{asset('img/florance/img-4.webp')}}" alt="Thumbnail 4" /></div>
                                    <div><img src="{{asset('img/florance/img-5.webp')}}" loading="lazy" data-large="{{asset('img/florance/img-5.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{asset('img/florance/img-6.webp')}}" loading="lazy" data-large="{{asset('img/florance/img-6.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{asset('img/florance/img-7.webp')}}" loading="lazy" data-large="{{asset('img/florance/img-7.webp')}}" alt="Thumbnail 5" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Spesifikasi</h5>
                                    <ul class="features-list row">
                                        <div class="col-6 col-lg-12">
                                            <li>Luas bangunan 53 m², lahan 90 m² (7,5 x 12 meter)</li>
                                            <li>2 kamar tidur</li>
                                            <li>1 kamar mandi</li>
                                            <li>Ruang tamu luas</li>
                                            <li>Dapur</li>
                                            <li>Jalan menggunakan paving</li>
                                            <li>Jalan paving</li>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <li>Ada pagar depan</li>
                                            <li>Ada Tandon air tanam</li>
                                            <li>PDAM dan listrik PLN 1300 w</li>
                                            <li>ROW jalan 9 meter</li>
                                            <li>Ada lampu pagar</li>
                                            <li>Carport</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div id="table-florence" class="table-responsive">
                                        <div class="mt-1">
                                            <h5>Rincian Harga</h5>
                                            <table class="table table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Deskripsi</th>
                                                        <th>Detail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Harga Jual</th>
                                                        <td>860.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DP 5%</th>
                                                        <td>43.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>UTJ</th>
                                                        <td>5.000.000 <span style="color: red">(Refundable)</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cashback</th>
                                                        <td>38.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sisa DP</th>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR (5.25%)</th>
                                                        <td>684.000.000</td>
                                                    </tr>
                                                    <tr class="table-light">
                                                        <th>KPR per Bulan (25 Thn)</th>
                                                        <td>3.644.900</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (20 Thn)</th>
                                                        <td>4.190.500</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (15 Thn)</th>
                                                        <td>5.123.100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-info-produk" data-id="florance" id="btn-florence">Info Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-tipe" data-img="{{ asset('img/carausel-1.jpg') }}" id="modal-milan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tipe Milan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="gallery-container">
                                <div class="main-image">
                                    <img src="{{ asset('img/carausel-1.jpg') }}" class="mainImage" loading="lazy" alt="Main Image" />
                                </div>
                                <div class="spinner-border mt-3 text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="thumbnails" style="display: none">
                                    <div><img src="{{ asset ('img/milan/img-1.webp')}}" loading="lazy" data-large="{{ asset ('img/milan/img-1.webp')}}" alt="Thumbnail 1" /></div>
                                    <div><img src="{{ asset ('img/milan/img-2.webp')}}" alt="Thumbnail 2" loading="lazy" data-large="{{ asset ('img/milan/img-2.webp')}}" /></div>
                                    <div><img src="{{ asset ('img/milan/img-3.webp')}}" alt="Thumbnail 3" loading="lazy" data-large="{{ asset ('img/milan/img-3.webp')}}" /></div>
                                    <div><img src="{{ asset ('img/milan/img-4.webp')}}" loading="lazy" data-large="{{ asset ('img/milan/img-4.webp')}}" alt="Thumbnail 4" /></div>
                                    <div><img src="{{ asset ('img/milan/img-5.webp')}}" loading="lazy" data-large="{{ asset ('img/milan/img-5.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/milan/img-6.webp')}}" loading="lazy" data-large="{{ asset ('img/milan/img-6.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/milan/img-0.webp')}}" loading="lazy" data-large="{{ asset ('img/milan/img-0.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/milan/img-7.png"')}}" loading="lazy" data-large="{{ asset ('img/milan/img-7.png"')}}" alt="Thumbnail 5" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Spesifikasi</h5>
                                    <ul class="features-list row">
                                        <div class="col-6 col-lg-12">
                                            <li>Luas bangunan 45 m², lahan 72 m²</li>
                                            <li>2 kamar tidur</li>
                                            <li>1 kamar mandi</li>
                                            <li>Dapur</li>
                                            <li>Jalan menggunakan paving</li>
                                            <li>Ada pagar depan</li>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <li>Carport</li>
                                            <li>Tandon air tanam</li>
                                            <li>PDAM dan listrik PLN 1300 w</li>
                                            <li>Menghadap selatan atau utara</li>
                                            <li>ROW jalan 9 meter</li>
                                            <li>Ada lampu pagar</li>
                                        </div>
                                    </ul>
                                </div>
                                <div id="table-milan" class="table-responsive col-lg-7">
                                    <div class="mt-1">
                                        <h5>Rincian Harga</h5>
                                        <table class="table table-bordered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Harga Jual</th>
                                                    <td>590.000.000</td>
                                                </tr>
                                                <tr>
                                                    <th>DP 5%</th>
                                                    <td>29.500.000</td>
                                                </tr>
                                                <tr>
                                                    <th>UTJ</th>
                                                    <td>5.000.000 <span style="color: red">(Refundable)</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Cashback</th>
                                                    <td>24.500.000</td>
                                                </tr>
                                                <tr>
                                                    <th>Sisa DP</th>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th>KPR (5.25%)</th>
                                                    <td>560.500.000</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th>KPR per Bulan (25 Thn)</th>
                                                    <td>3.397.600</td>
                                                </tr>
                                                <tr>
                                                    <th>KPR per Bulan (20 Thn)</th>
                                                    <td>3.827.900</td>
                                                </tr>
                                                <tr>
                                                    <th>KPR per Bulan (15 Thn)</th>
                                                    <td>4.576.400</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-info-produk" data-id="milan" id="btn-milan">Info Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-tipe" data-img="{{ asset('img/info/info-1.jpeg') }}" id="modal-torino"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tipe Torino</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="gallery-container">
                                <div class="main-image">
                                    <img src="{{ asset('img/info/info-3.jpeg') }}" class="mainImage" loading="lazy"
                                        alt="Main Image" />
                                </div>
                                <div class="spinner-border mt-3 text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="thumbnails" style="display: none">
                                    <div><img src="{{ asset('img/info/info-4.jpeg') }}" loading="lazy"
                                            data-large="{{ asset('img/info/info-5.jpeg') }}" alt="Thumbnail 1" />
                                    </div>
                                    <div><img src="{{ asset('img/info/info-5.jpeg') }}" alt="Thumbnail 2"
                                            loading="lazy" data-large="{{ asset('img/info/info-3.jpeg') }}" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Spesifikasi</h5>
                                    <ul class="features-list row">
                                        <div class="col-6 col-lg-12">
                                            <li>Luas bangunan 45 m², lahan 72 m²</li>
                                            <li>2 kamar tidur</li>
                                            <li>1 kamar mandi</li>
                                            <li>Dapur</li>
                                            <li>Jalan menggunakan paving</li>
                                            <li>Ada pagar depan</li>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <li>Carport</li>
                                            <li>Tandon air tanam</li>
                                            <li>PDAM dan listrik PLN 1300 w</li>
                                            <li>Menghadap selatan atau utara</li>
                                            <li>ROW jalan 9 meter</li>
                                            <li>Ada lampu pagar</li>
                                        </div>
                                    </ul>
                                </div>
                                <div id="table-milan" class="table-responsive col-lg-7">
                                    <div class="mt-1">
                                        <h5>Rincian Harga</h5>
                                        <table class="table table-bordered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Harga Jual</th>
                                                    <td>425.000.000</td>
                                                </tr>
                                                <tr>
                                                    <th>DP 5%</th>
                                                    <td>21.250.000</td>
                                                </tr>
                                                <tr>
                                                    <th>UTJ</th>
                                                    <td>5.000.000 <span style="color: red">(Refundable)</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Cashback</th>
                                                    <td>13.250.000</td>
                                                </tr>
                                                <tr>
                                                    <th>Sisa DP</th>
                                                    <td>
                                                        3.000.000 <span style="color: red">(Dicicil 3x)</span>
                                                        <br />
                                                        1.000.000 <span style="color: red">/ Bulan</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>KPR (5,25%)</th>
                                                    <td>403.750.000</td>
                                                </tr>
                                                <tr class="table-light">
                                                    <th>KPR per Bulan (25 Thn)</th>
                                                    <td>4.146.300</td>
                                                </tr>
                                                <tr>
                                                    <th>KPR per Bulan (20 Thn)</th>
                                                    <td>4.671.300</td>
                                                </tr>
                                                <tr>
                                                    <th>KPR per Bulan (15 Thn)</th>
                                                    <td>5.584.700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-info-produk" data-id="milan"
                        id="btn-milan">Info Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-tipe" data-img="{{ asset('img/carausel-4.jpeg') }}" id="modal-roma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tipe Roma</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery-container">
                                <div class="main-image">
                                    <img src="{{ asset('img/carausel-4.jpeg') }}" class="mainImage" loading="lazy" alt="Main Image" />
                                </div>
                                <div class="spinner-border mt-3 text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="thumbnails" style="display: none">
                                    <div><img src="{{ asset ('img/roma/img-1.webp')}}" loading="lazy" data-large="{{ asset ('img/roma/img-1.webp')}}" alt="Thumbnail 1" /></div>
                                    <div><img src="{{ asset ('img/roma/img-2.webp')}}" alt="Thumbnail 2" loading="lazy" data-large="{{ asset ('img/roma/img-2.webp')}}" /></div>
                                    <div><img src="{{ asset ('img/roma/img-3.webp')}}" alt="Thumbnail 3" loading="lazy" data-large="{{ asset ('img/roma/img-3.webp')}}" /></div>
                                    <div><img src="{{ asset ('img/roma/img-4.webp')}}" loading="lazy" data-large="{{ asset ('img/roma/img-4.webp')}}" alt="Thumbnail 4" /></div>
                                    <div><img src="{{ asset ('img/roma/img-5.webp')}}" loading="lazy" data-large="{{ asset ('img/roma/img-5.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/roma/img-6.webp')}}" loading="lazy" data-large="{{ asset ('img/roma/img-6.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/roma/img-0.webp')}}" loading="lazy" data-large="{{ asset ('img/roma/img-0.webp')}}" alt="Thumbnail 5" /></div>
                                    <div><img src="{{ asset ('img/roma/img-7.png"')}}" loading="lazy" data-large="{{ asset ('img/roma/img-7.png"')}}" alt="Thumbnail 5" /></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Spesifikasi</h5>
                                    <ul class="features-list row">
                                        <div class="col-6 col-lg-12">
                                            <li>Luas bangunan 68 m², lahan 90 m²</li>
                                            <li>3 kamar tidur</li>
                                            <li>2 kamar mandi</li>
                                            <li>Dapur modern</li>
                                            <li>Rumah 2 Lantai</li>
                                            <li>PDAM dan listrik PLN 1300 w</li>
                                            <li>Jalan paving</li>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <li>Carport</li>
                                            <li>Pagar depan</li>
                                            <li>Dapur</li>
                                            <li>Jalan menggunakan paving</li>
                                            <li>Lampu Pagar</li>
                                            <li>Tandon air tanam</li>
                                            <li>ROW jalan 9 meter</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div id="table-roma" class="table-responsive">
                                        <div class="mt-1">
                                            <h5>Rincian Harga</h5>
                                            <table class="table table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Deskripsi</th>
                                                        <th>Detail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Harga Jual</th>
                                                        <td>860.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DP 5%</th>
                                                        <td>43.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>UTJ</th>
                                                        <td>5.000.000 <span style="color: red">(Refundable)</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cashback</th>
                                                        <td>38.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sisa DP</th>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR (5.25%)</th>
                                                        <td>817.000.000</td>
                                                    </tr>
                                                    <tr class="table-light">
                                                        <th>KPR per Bulan (25 Thn)</th>
                                                        <td>4.952.500</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (20 Thn)</th>
                                                        <td>5.579.600</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (15 Thn)</th>
                                                        <td>6.670.600</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-info-produk" data-id="roma">Info Lebih Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-tipe" data-img="{{ asset('img/info/info-3.jpeg') }}" id="modal-verona"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tipe Verona</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery-container">
                                <div class="main-image">
                                    <img class="mainImage" src="{{ asset('img/info/info-3.jpeg') }}" loading="lazy" alt="Main Image" />
                                </div>
                                <div class="spinner-border mt-3 text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="thumbnails" style="display: none">
                                    <div><img src="{{ asset('img/info/info-3.jpeg') }}" loading="lazy"
                                            data-large="{{ asset('img/info/info-3.jpeg') }}" alt="Thumbnail 1" />
                                    </div>
                                    <div><img src="{{ asset('img/info/info-7.jpeg') }}" loading="lazy"
                                            data-large="{{ asset('img/info/info-3.jpeg') }}" alt="Thumbnail 1" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Spesifikasi</h5>
                                    <ul class="features-list row">
                                        <div class="col-6 col-lg-12">
                                            <li>Luas bangunan 51 m², lahan 91 m²</li>
                                            <li>3 kamar tidur</li>
                                            <li>1 kamar mandi</li>
                                            <li>Dapur modern</li>
                                            <li>Lantai Granit</li>
                                            <li>Ruang Tamu luas</li>
                                            <li>PDAM dan listrik PLN 1300 w</li>
                                            <li>Jalan paving</li>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <li>Carport</li>
                                            <li>Pagar depan</li>
                                            <li>Dapur</li>
                                            <li>Jalan menggunakan paving</li>
                                            <li>Lampu Pagar</li>
                                            <li>Tandon air tanam</li>
                                            <li>ROW jalan 9 meter</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div id="table-roma" class="table-responsive">
                                        <div class="mt-1">
                                            <h5>Rincian Harga</h5>
                                            <table class="table table-bordered">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Deskripsi</th>
                                                        <th>Detail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Harga Jual</th>
                                                        <td>740.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DP 5%</th>
                                                        <td>37.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>UTJ</th>
                                                        <td>5.000.000 <span style="color: red">(Refundable)</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cashback</th>
                                                        <td>32.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sisa DP</th>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR (5,25%)</th>
                                                        <td>703.000.000</td>
                                                    </tr>
                                                    <tr class="table-light">
                                                        <th>KPR per Bulan (25 Thn)</th>
                                                        <td>4.261.400</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (20 Thn)</th>
                                                        <td>4.801.100</td>
                                                    </tr>
                                                    <tr>
                                                        <th>KPR per Bulan (15 Thn)</th>
                                                        <td>5.739.900</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary btn-info-produk" data-id="roma">Info Lebih
                        Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(".owl-carousel-blog").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            focusOnSelect: true,
            infinite: true,
            responsive: [{
                    breakpoint: 820,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        const navLinks = document.querySelectorAll(".nav-item.nav-link");

        const sections = document.querySelectorAll("section");

        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop - sectionHeight / 3) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${current}`) {
                    link.classList.add("active");
                }
            });
        });
        $(document).ready(function() {
            document.addEventListener("DOMContentLoaded", function() {
                const player = new Plyr("#plyr-video");

                let videoElement = document.getElementById("plyr-video");
                let videoSource = videoElement.querySelector("source");

                let observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                videoSource.setAttribute("src", videoSource.getAttribute(
                                    "data-src"));
                                videoElement.load();
                                observer.unobserve(videoElement);
                            }
                        });
                    }, {
                        threshold: 0.5
                    }
                );

                observer.observe(videoElement);
            });

            const now = new Date();

            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            var pesan;

            if (hours > 6 && hours < 10) {
                pesan = "pagi";
            } else if (hours > 10 && hours < 14) {
                pesan = "siang";
            } else if (hours > 14 && hours < 18) {
                pesan = "sore";
            } else {
                pesan = "malam";
            }

            $(".btn-info-produk").click(function() {
                const whatsappUrl =
                    `https://wa.me/+6281335215789?text=Halo selamat ${pesan},saya mau tanya rumah tipe ${$(this).data("id")}`;
                window.open(whatsappUrl, "_blank");
            });
            const player = new Plyr("#player");

            $(".modal-tipe").on("shown.bs.modal", function() {
                var $thumbnails = $(".thumbnails");
                var $loadingIndicator = $(".spinner-border");
                $loadingIndicator.show();
                var img = $(this).data("img");
                $(".mainImage").attr("src", img);
                $('.mainImage').show()

                if (!$thumbnails.hasClass("slick-initialized")) {
                    $thumbnails.slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        focusOnSelect: true,
                        infinite: true,
                        responsive: [{
                                breakpoint: 920,
                                settings: {
                                    slidesToShow: 3,
                                },
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                },
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 2,
                                },
                            },
                        ],
                    });
                    $loadingIndicator.css("display", "none");
                    $thumbnails.fadeIn();
                } else {
                    $loadingIndicator.fadeOut();
                    $thumbnails.fadeIn();
                }
            });

            $(".modal-tipe").on("hidden.bs.modal", function() {
                var $thumbnails = $(".thumbnails");
                var $loadingIndicator = $(".spinner-border");
                $(".mainImage").hide();

                $thumbnails.fadeOut(function() {
                    if ($thumbnails.hasClass("slick-initialized")) {
                        $thumbnails.slick("unslick");
                    }

                    $thumbnails.css("display", "none");
                    $loadingIndicator.show();
                });
            });

            $(".thumbnails img").click(function() {
                var largeImage = $(this).data("large");
                const imagePath = largeImage;
                const cek = imagePath.split("/");
                const imageName = imagePath.split("/").pop().split(".").shift();

                if (imageName == "img-7") {
                    if (cek[1] == "roma") {
                        $(".mainImage").css("width", "100%");
                    } else {
                        $(".mainImage").css("width", "75%");
                    }
                } else if (cek[1] == "info") {
                    $(".mainImage").css("width", "120%");
                    var lebarLayar = window.innerWidth;

                    if (lebarLayar <= 931) {
                        $(".mainImage").css("width", "100%");
                    }
                } else {
                    $(".mainImage").css("width", "100%");
                }

                $(".mainImage").attr("src", largeImage);
            });
        });

        function adjustLayout() {
            const container = document.querySelector(".cek-pill");

            if (window.innerWidth <= 768) {
                if (!container.classList.contains("row")) {
                    container.classList.add("row");
                }
            } else {
                if (container.classList.contains("row")) {
                    container.classList.remove("row");
                }
            }
        }

        window.addEventListener("resize", adjustLayout);

        adjustLayout();
        var swiper = new Swiper(".swiper", {
            slidesPerView: 1,
            centeredSlides: false,
            slidesPerGroupSkip: 1,
            autoHeight: true,
            spaceBetween: 20,
            grabCursor: true,
            rewind: true,
            keyboard: {
                enabled: true,
            },
            breakpoints: {
                769: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                },
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        function wa() {
            const now = new Date();

            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            var pesan;

            if (hours > 6 && hours < 10) {
                pesan = "pagi";
            } else if (hours > 10 && hours < 14) {
                pesan = "siang";
            } else if (hours > 14 && hours < 18) {
                pesan = "sore";
            } else {
                pesan = "malam";
            }
            window.open(
                `https://wa.me/+62081335215789?text=Halo selamat ${pesan},saya mau tanya-tanya rumah di Grand Sentosa Land.`,
                "_blank");
        }
        // Hero Header carousel
        $(".header-carousel").owlCarousel({
            animateOut: 'fadeOut',
            items: 1,
            margin: 0,
            stagePadding: 0,
            autoplay: true,
            smartSpeed: 500,
            dots: true,
            loop: true,
            nav: true,
            navText: [
                '<i class="bi bi-arrow-left"></i>',
                '<i class="bi bi-arrow-right"></i>'
            ],
        });
    </script>
    @yield('js')
</body>

</html>
