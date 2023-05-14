@extends('includes.app')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Konsultasi</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Konsultasi</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Konsultasi Button Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-primary">_______</span>
                    <span class="px-2">Konsultasi</span>
                    <span class="px-2 text-primary">_______</span>
                </p>
                <h1 class="mb-4">Hubungi Pihak Sekolah</h1>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary py-3 px-4" href="">
                    <i class="fab fa-whatsapp me-2"></i> Hubungi Kami
                </a>
            </div>

        </div>

        <!-- Konsultasi Button End -->
        <br><br><br>
        <!-- Social Media Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5">
                        <span class="px-2 text-primary">_______</span>
                        <span class="px-2">Social Media</span>
                        <span class="px-2 text-primary">_______</span>
                    </p>
                    <h1 class="mb-4">Social Media Smektuber</h1>
                </div>
            </div>
            <div class="container my-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#" class="me-4">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="#" class="me-4">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="#" class="me-4">
                                <i class="fa-brands fa-tiktok fa-2x"></i>
                            </a>
                            <a href="#" class="me-4">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Social Media End -->
        @endsection
