@extends('layout.app')

@section('content')
    <section id="home">
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="{{ asset('img/carausel-1.jpg') }}" class="img-fluid w-100" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat datang di <strong>Grand
                                            Sentosa Land</strong></h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Beli Rumah Tanpa DP</h1>
                                    <p class="mb-5 fs-5">Siap Huni, Tanpa Biaya Tambahan Hingga Serah Terima Kunci!</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="#products">Detail</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2">Follow Us:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" target="_blank"
                                                href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                                href="https://x.com/staff_GMansion?t=3W17WgIIDTyQzIhQoFPOgw&s=09"><i
                                                    class="fa-brands fa-x-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                                href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" target="_blank"
                                                href="https://www.tiktok.com/.sentosa.land?is_from_webapp=1&sender_device=pc"><i
                                                    class="fa-brands fa-tiktok"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="{{ asset('img/carausel-1.jpg') }}" class="img-fluid w-100" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang Di Grand sentosa
                                        land</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Beli Rumah Tanpa DP</h1>
                                    <p class="mb-5 fs-5">Unit Ready Stock, Dengan DP 0%,Cicilan Mulai 2 Jutaan Promo Free
                                        semua biaya</p>
                                    <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="#">Detail</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h2 class="text-white me-2">Follow Us:</h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" target="_blank"
                                                href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                                href="https://x.com/staff_GMansion?t=3W17WgIIDTyQzIhQoFPOgw&s=09"><i
                                                    class="fa-brands fa-x-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" target="_blank"
                                                href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" target="_blank"
                                                href="https://www.tiktok.com/sentosa.land?is_from_webapp=1&sender_device=pc"><i
                                                    class="fa-brands fa-tiktok"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar & Hero End -->

    <!-- products -->
    <section id="products">
        <!-- Services Start -->
        <div class="container-fluid service py-5 pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Produk Kami</h4>
                    <h1 class="display-5 mb-4">Dirancang untuk kenyamanan Anda, dibangun untuk masa depan Anda</h1>
                    <p class="mb-0">Temukan hunian yang menggabungkan desain modern dengan kualitas tinggi, memberikan
                        Anda dan keluarga kenyamanan tak tertandingi di setiap langkah perjalanan hidup.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/carausel-1.jpg') }}" class="img-fluid rounded-top w-100"
                                    loading="lazy" alt="Image" />
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Tipe Milan</a>
                                <div class="mb-4 d-flex justify-content-between product-item">
                                    <p><i class="m-2 fa-solid text-primary fa-expand"></i> 6 x 12 m²</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bed"></i>2 kamar</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bath"></i>1 kamar mandi</p>
                                </div>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    data-img="{{ asset('img/carausel-1.jpg') }}" data-bs-target="#modal-milan"
                                    data-bs-toggle="modal" href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/carausel-4.jpeg') }}" class="img-fluid rounded-top w-100"
                                    loading="lazy" alt="Image" />
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Tipe Roma</a>
                                <div class="mb-4 d-flex justify-content-between product-item">
                                    <p><i class="m-2 fa-solid text-primary fa-expand"></i> 6 x 15 m²</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bed"></i>3 kamar</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bath"></i>2 kamar mandi</p>
                                </div>

                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    data-img="{{ asset('img/carausel-1.jpg') }}g" data-bs-target="#modal-roma"
                                    data-bs-toggle="modal">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/carausel-2.jpeg') }}" class="img-fluid rounded-top w-100"
                                    loading="lazy" alt="Image" />
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Tipe Florence</a>
                                <div class="mb-4 d-flex justify-content-between product-item">
                                    <p><i class="m-2 fa-solid text-primary fa-expand"></i> 7,5 x 12 m²</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bed"></i>2 kamar</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bath"></i>1 kamar mandi</p>
                                </div>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    data-img="{{ asset('img/carausel-1.jpg') }}g" data-bs-target="#modal-florance"
                                    data-bs-toggle="modal">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/info/info-1.jpeg') }}" class="img-fluid rounded-top w-100"
                                    loading="lazy" alt="Image" />
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Tipe Torino</a>
                                <div class="mb-4 d-flex justify-content-between product-item">
                                    <p><i class="m-2 fa-solid text-primary fa-expand"></i> 6 x 12 m²</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bed"></i>2 kamar</p>
                                    <p><i class="m-2 fa-solid text-primary fa-bath"></i>1 kamar mandi</p>
                                </div>
                                <a class="btn btn-primary rounded-pill py-2 px-4"
                                    data-img="{{ asset('img/info/info-1.jpeg') }}" data-bs-target="#modal-torino"
                                    data-bs-toggle="modal">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{ asset('img/info/info-1.jpeg') }}" class="img-fluid rounded-top w-100"
                                        loading="lazy" alt="Image" />
                                </div>
                                <div class="rounded-bottom p-4">
                                    <a href="#" class="h4 d-inline-block mb-4">Tipe Verona</a>
                                    <div class="mb-4 d-flex justify-content-between product-item">
                                        <p><i class="m-2 fa-solid text-primary fa-expand"></i> 7 x 13 m²</p>
                                        <p><i class="m-2 fa-solid text-primary fa-bed"></i>3 kamar</p>
                                        <p><i class="m-2 fa-solid text-primary fa-bath"></i>1 kamar mandi</p>
                                    </div>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#"
                                        data-img="{{ asset('img/info/info-1.jpeg') }}" data-bs-target="#modal-verona"
                                        data-bs-toggle="modal">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Features Start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Fasilitas Kami</h4>
                    <h1 class="display-5 mb-4">Fasilitas umum untuk kenyamananan anda</h1>
                    <p class="mb-0">Fasilitas umum yang lengkap dirancang untuk memastikan kenyamanan,kemudahan dan
                        keamanan Anda dalam menjalani aktivitas sehari-hari</p>
                </div>
                <div class="owl-carousel-blog gap-3">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-person-swimming fa-4x text-primary"></i>
                        </div>
                        <h4>Kolam renang</h4>
                        <p class="mb-4">Dilengkapi dengan kolam renang yang bersih dan nyaman untuk rekreasi keluarga.
                        </p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-dumbbell fa-4x text-primary"></i>
                        </div>
                        <h4>Club House</h4>
                        <p class="mb-4">Dilengkapi dengan club house yang lengkap dan nyaman untuk menjaga kebugaran Anda
                        </p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 50 50">
                                <path fill="#00d084 "
                                    d="M7.206 31.141c2.885 0 5.219-2.399 5.219-5.368c0-2.953-2.334-5.353-5.219-5.353C4.333 20.42 2 22.82 2 25.773c0 2.968 2.333 5.368 5.206 5.368m29.23 9.216a.53.53 0 0 1 .741.117l.965 1.372a.58.58 0 0 1-.116.766l-7.08 5.287a.536.536 0 0 1-.743-.118l-.962-1.372a.575.575 0 0 1 .116-.764zm-8.003-6.817l-2.808-5.063l-1.474 1.107l2.808 5.09zm-6.551-11.827L10.962 2l-2.089.014l11.522 20.82zm10.281 10.43C32.78 31.682 34.192 31 35 31h10c1.974 0 3 1.986 3 4.004C48 37.034 46.974 38 45 38h-9l-10.836 8.502c-3.808 2.819-6.116-.278-6.116-.278l-8.483-8.729c-1.423-1.753-1.115-5.089.591-6.566l11.739-8.597c1.166-1 2.897-.843 3.885.343c.976 1.2.822 2.994-.346 3.996l-7.515 5.657l5.399 5.484z" />
                            </svg>
                        </div>
                        <h4>Taman Bermain</h4>
                        <p class="mb-4">Taman bermain yang luas dan aman, untuk kesenangan dan kreativitas anak.</p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-basketball fa-4x text-primary"></i>
                        </div>
                        <h4>lapangan Basket</h4>
                        <p class="mb-4">Lapangan basket yang luas dan terawat, ideal untuk bermain dan berlatih</p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-mosque fa-4x text-primary"></i>
                        </div>
                        <h4>Tempat Ibadah</h4>
                        <p class="mb-4">Tempat ibadah yang tenang dan nyaman, menyediakan ruang untuk berdoa dan refleksi
                        </p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fa-solid fa-person-running fa-4x text-primary"></i>
                        </div>
                        <h4>Joging Track</h4>
                        <p class="mb-4">Jogging track yang mulus dan terawat, cocok untuk berolahraga dan menjaga
                            kebugaran</p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 24 24">
                                <path fill="#00d084"
                                    d="M18.618 7.462L6.403 2.085a1 1 0 0 0-.77-.016a1 1 0 0 0-.552.537l-3 7a1 1 0 0 0 .525 1.313L9.563 13.9L8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054l3.419 1.465a1 1 0 0 0 1.311-.518l3-6.857a1 1 0 0 0-.513-1.316m1.312 8.91l-1.858-.742l1.998-5l1.858.741z" />
                            </svg>
                        </div>
                        <h4>Diawasi CCTV</h4>
                        <p class="mb-4">Area yang diawasi CCTV secara 24 jam untuk keamanan dan kenyamanan Anda.</p>
                    </div>
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="63" height="63" viewBox="0 0 24 24">
                                <path fill="#00d084"
                                    d="M20 9H8.22A2.97 2.97 0 0 0 4 8.8c-.64.56-1 1.36-1 2.2v9a1 1 0 0 0-1 1v1h8v-1a1 1 0 0 0-1-1v-7h11a2 2 0 0 0 2-2a2 2 0 0 0-2-2M6 12.5A1.5 1.5 0 0 1 4.5 11A1.5 1.5 0 0 1 6 9.5A1.5 1.5 0 0 1 7.5 11A1.5 1.5 0 0 1 6 12.5m4.5-.5L9 10h1.5l1.5 2zm4 0L13 10h1.5l1.5 2zm4 0L17 10h1.5l1.5 2z" />
                            </svg>
                        </div>
                        <h4>One Gate System</h4>
                        <p class="mb-4">Sistem one gate yang efisien untuk keamanan dan akses yang terkontrol dengan
                            baik.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- Offer Start -->
        <div class="container-fluid offer-section pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Produk Kami</h4>
                    <h1 class="display-5 mb-4">Virtual Tur</h1>
                    <p class="mb-0">Tonton video tur virtual untuk menjelajahi rumah impian Anda dengan detail lengkap.
                    </p>
                </div>
                <div class="g-5 align-items-center">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="nav cek-pill d-flex bg-light rounded p-5 gap-3">
                            <a class="accordion-link active p-4 mb-4 flex-grow-1 text-center" data-bs-toggle="pill"
                                href="#collapseTwo">
                                <p class="mb-0">Milan</p>
                            </a>
                            <a class="accordion-link p-4 mb-4 flex-grow-1 text-center" data-bs-toggle="pill"
                                href="#collapseOne">
                                <p class="mb-0">Florence</p>
                            </a>

                            <a class="accordion-link p-4 mb-4 flex-grow-1 text-center" data-bs-toggle="pill"
                                href="#collapseThree">
                                <p class="mb-0">Roma</p>
                            </a>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <div class="tab-content">
                            <div id="collapseOne" class="tab-pane fade show p-0">
                                <div class="row p-3 g-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="plyr__video-embed" id="player">
                                            <video id="plyr-video" controls style="width: 100%">
                                                <source src="{{ asset('img/vidio/vid-florence.mp4') }}"
                                                    type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="tab-pane fade show p-0 active">
                                <div class="row p-3 g-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="plyr__video-embed" id="player">
                                            <video id="plyr-video" controls style="width: 100%">
                                                <source src="{{ asset('img/vidio/vid-milan.mp4') }}" type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="tab-pane fade show p-0">
                                <div class="row g-4 p-3">
                                    <div class="d-flex justify-content-center">
                                        <div class="plyr__video-embed" id="player">
                                            <video id="plyr-video" controls style="width: 100%">
                                                <source src="{{ asset('img/vidio/vid-roma.mp4') }}" type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->
    </section>
    <section id="info" class="py-5">
        <div class="container-fluid">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                <h4 class="text-primary">Info Tambahan</h4>
                <h1 class="display-5 mb-4">Informasi tambahan untuk meyakinkan anda</h1>
                <p class="mb-0">Informasi tambahan yang akan meyakinkan Anda tentang pilihan hunian terbaik, lengkap
                    dengan promo menarik dan tipe baru yang siap memenuhi kebutuhan Anda!</p>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper gap-2">
                    <div class="swiper-slide">
                        <div>
                            <div class="plyr__video-embed" id="player">
                                <video id="plyr-video" controls style="width: 100%">
                                    <source src="{{ asset('img/info/vid-1.mp4') }}"type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-1.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-2.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-6.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-5.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-7.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <img src="{{ asset('img/info/info-3.jpeg') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- About Start -->
    <section id="about">

        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Alasan Memilih Kami</h4>
                    <h1 class="display-5 mb-4">Rumah impian dengan modal minim dan serah terima kunci cepat</h1>
                    <p class="mb-0">
                        Hunian kami adalah pilihan ideal bagi Anda yang menginginkan rumah impian dengan investasi minimal
                        dan proses cepat, sehingga Anda bisa segera menikmati kenyamanan tanpa menunggu lama untuk serah
                        terima kunci
                    </p>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/alasan/tol.jpg" class="img-fluid w-100 rounded" loading="lazy"
                                alt="iamge-alasan-pilih" />
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Lokasi Strategis</a>
                        <p class="mb-4">Lokasi 0 Jl. Raya, selangkah dari Surabaya, dekat dgn Bandara, RS, Kampus, Tol,
                            Mall, Terminal, Pasar tradisional.</p>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/alasan/legalitas-perusahaan.jpg" class="img-fluid w-100 rounded" loading="lazy"
                                alt="iamge-alasan-pilih" />
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Legalitas Terjamin</a>
                        <p class="mb-4">Sertifikat lahan yang sudah SPLIT sehingga bisa proses KPR melalui Perbankan</p>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/alasan/kolam.jpg" class="img-fluid w-100 rounded" loading="lazy"
                                alt="iamge-alasan-pilih" />
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Fasilitas Umum lengkap</a>
                        <p class="mb-4">Fasilitas umum lengkap tersedia untuk mendukung kenyamanan anda.</p>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="{{ asset('img/carausel-1.jpg') }}g" class="img-fluid w-100 rounded" loading="lazy"
                                alt="iamge-alasan-pilih" />
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Rumah Siap Huni</a>
                        <p class="mb-4">Rumah siap huni bisa langsung ditempati tanpa harus menunggu rumah dibangun.</p>
                    </div>
                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/alasan/cek.png" class="img-fluid w-100 rounded" loading="lazy"
                                alt="iamge-alasan-pilih" />
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Didukung Oleh Bank</a>
                        <p class="mb-4">Kami bekerja sama dengan bank BTN dan OCBC</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- Abvout Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="display-5 mb-4">GRAND SENTOSA LAND</h1>
                            <p class="mb-4">
                                Grand Sentosa Land merupakan proyek baru dari PT GM Jaya Sentosa yang juga merupakan anak
                                perusahaan dari PT GM Jaya Mandiri. Adapun 5 proyek perumahan yang sudah di dirikan oleh PT
                                GM Jaya Mandiri yakni
                                Green Mansion Tambak Sumur (SO), Waru (SO), Tambak Rejo (SO), Lontar Sby (SO), serta Juanda
                                (PB).
                            </p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h4>Call Us</h4>
                                            <a onclick="wa()" class="mb-0 fs-5" style="letter-spacing: 1px">(+62)
                                                81335215789</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded position-relative overflow-hidden">
                            <img src="img/logo.png" class="img-fluid rounded w-100" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>

    <section id="testimoni">
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Review Dari User Kami</h1>
                    <p class="mb-0">
                        Tidak ada yang lebih meyakinkan selain pengalaman nyata dari pengguna kami! Berikut adalah review
                        dari user kami yang telah merasakan langsung kualitas produk dan layanan yang kami tawarkan. Baca
                        ulasan mereka
                        dan temukan mengapa kami menjadi pilihan terbaik untuk kebutuhan Anda.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image" />
                        </div>
                        <div class="testimonial-text mb-4">
                            <p class="mb-0">Proses pembelian cepat dan mudah, kami langsung bisa menempati rumah tanpa
                                kendala</p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Fitria Wijaya</h4>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image" />
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Proses pembelian sangat mudah dan cepat. Saya tidak perlu menunggu lama untuk
                                mendapatkan rumah</p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Felix Alberta</h4>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testi-2.jpg" style="object-fit: cover" class="img-fluid" alt="Image" />
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Fasilitas lengkap seperti jogging track dan kolam renang membuat keluarga
                                saya nyaman dan betah.</p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Abdul Kader</h4>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image" />
                        </div>
                        <div class="testimonial-text mb-4">
                            <p class="mb-0">Desain rumahnya modern dan elegan, sangat sesuai dengan harapan kami.</p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Hofifah Nur Aini</h4>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </section>

    <!-- FAQs Start -->
    <section id="faq">
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-0">
                        Sering mendapatkan pertanyaan yang sama? Kami hadirkan Frequently Asked Questions (FAQ) untuk
                        membantu Anda menemukan jawaban cepat dan jelas mengenai produk atau layanan kami. Temukan informasi
                        yang paling
                        sering ditanyakan oleh pelanggan di sini, agar Anda semakin yakin dalam mengambil keputusan.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                            <div class="accordion-item rounded-top">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed rounded-top" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Bagaimana cara memesan rumah di Grand Sentosa Land?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Dengan cara UTJ(uang tanda jadi) 5 juta,check BI lancar
                                        langsung proses pemberkasan.Akad realisasi dilaksanakan setelah keluar SP3K</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Apakah tersedia promo DP 0%?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Ya,tersedia promo DP 0%.Jadi hanya bayar UTJ saja</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Apa fasilitas umum yang disediakan di lingkungan perumahan?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">
                                        Tersedia fasilitas umum berupa
                                        <ul>
                                            <li>Taman Bermain</li>
                                            <li>Tempat Olahraga</li>
                                            <li>Tempat Ibadah</li>
                                            <li>Tempat Perbelanjaan</li>
                                            <li>Kolam Renang</li>
                                            <li>Lapangan Basket</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Bagaimana proses pengajuan KPR?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Kelengkapan berkas langsung proses KPR</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Berapa lama proses serah terima kunci?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">Serah terima kunci dilaksanakan maksimal 2x24 jam setelah
                                        realisasi bank</div>
                                </div>
                            </div>
                            <div class="accordion-item rounded-bottom">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Apakah rumahnya siap huni?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                    <div class="accordion-body">ya,siap huni</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <img src="img/faq.jpg" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->
        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-5 mb-4">Temui Tim Kami</h1>
                    <p class="mb-0">Berikut adaah tim kami. yang bergerak di bidang masing-masing</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Theo</h4>
                                <p class="mb-0">Marketing</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.tiktok.com/@grand.sentosa.land?is_from_webapp=1&sender_device=pc"><i
                                        class="fab fa-tiktok"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" onclick="wa()"
                                    href=""><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0"
                                    href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team.png') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Taneko</h4>
                                <p class="mb-0">Marketing</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.tiktok.com/@grand.sentosa.land?is_from_webapp=1&sender_device=pc"><i
                                        class="fab fa-tiktok"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" onclick="wa()"
                                    href=""><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0"
                                    href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team2.jfif') }}" style="object-fit: cover; height: 350px"
                                    class="img-fluid img-siswanto" alt="" />
                            </div>
                            <div class="team-title">
                                <h4 class="mb-0">Siswanto</h4>
                                <p class="mb-0">Web Designer</p>
                            </div>
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.facebook.com/profile.php?id=61554255420644"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" onclick="wa()"
                                    href=""><i class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://github.com/Paksiswanto"><i class="fab fa-github"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0"
                                    href="https://www.instagram.com/grandsentosaland.officer?igsh=cTBtZG9heXI4emFu"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    </section>
@endsection
