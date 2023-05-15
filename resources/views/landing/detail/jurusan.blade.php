@extends('includes.app')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Teknik Komputer Jaringan</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="#">About</a></li>
                            <li class="breadcrumb-item"><a href="#">Jurusan</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp order-lg-last" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('landing/img/smk7.png') }}" alt="" />
                </div>
                <div class="col-lg-6 wow fadeInUp order-lg-first" data-wow-delay="0.5s">
                    <div class="h-100">

                        <h5 class="display-8">Tentang ⎯⎯⎯⎯⎯⎯⎯⎯</h5>
                        <h1 class="display-5">Teknik Komputer Jaringan</h1>

                        <p>
                            Jurusan TKJ (Teknik Komputer dan Jaringan) adalah suatu jurusan
                            yang terdapat di SMK/STM yang mempelajari seluk-beluk dunia
                            komputer dan jaringan komputer, mulai dari cara instalasi SO (Sistem Operasi),
                            menangani masalah pada PC, memperbaiki PC, membuat jaringan LAN atau
                            yang lainnya, membuat WEB, dan masih banyak lagi.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <br><br><br>
    <!-- Carousel Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-primary">_______</span>
                    <span class="px-2">Fasilitas</span>
                    <span class="px-2 text-primary">_______</span>
                </p>
                <h1 class="mb-4">Fasilitas Jurusan</h1>
            </div>
            <div class="row owl-carousel pb-2" id="carousel">
                <!-- Card -->
                <div class="col-lg-10 mb-10">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2 img-fluid" src="{{ asset('landing/img/blog_dami.png') }}"
                            alt="" />

                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-10 mb-10">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2 img-fluid" src="{{ asset('landing/img/blog_dami.png') }}"
                            alt="" />

                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-10 mb-10">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2 img-fluid" src="{{ asset('landing/img/blog_dami.png') }}"
                            alt="" />

                    </div>
                </div>
                <!-- end Card -->

            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Owl Carousel Script -->

    <script>
        $(document).ready(function() {
            $("#carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection
