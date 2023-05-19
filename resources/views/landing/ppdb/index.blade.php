@extends('includes.app')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Informasi Pendaftaran</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('landing/img/smk7.png') }}" alt="" />
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Tentang Kami</h1>
                        <!-- <p class="text-primary fs-5 mb-4">
                        The Most Trusted Cryptocurrency Platform
                      </p> -->
                        <p>
                            Penerimaan Peserta Didik Baru untuk SMK Negeri se Jawa Timur termasuk di dalamnya SMK Negeri
                            7 Jember, akan dibuka tahapannya mulai tanggal 20 Juni 2023 dan terintegrasi dalam sistem
                            PPDB SMK Negeri seluruh Jawa Timur tahun 2022 (PPDB Jatim 2022). Sistem PPDB SMK Negeri 7
                            Jember Tahun Pelajaran 2022/2023 menggunakan Sistem Online yang dibagi menjadi 3 tahapan
                            pendaftaran :
                        </p>
                        <p>
                            1. Tahap I (Online)
                            <br>a. Jalur Afirmasi;
                            <br>b. Jalur Perpindahan Tugas Orang Tua/Wali;
                            <br>c. Jalur
                            Prestasi Hasil Lomba;
                        </p>
                        <p>
                            2. Tahap II (Online)
                            <br>Jalur Prestasi Nilai Akademik;

                        </p>
                        <p>
                            3. Tahap III (Online)
                            <br>Jalur Zonasi;

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Download Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp order-lg-last text-end" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('landing/img/gambar_aplikasi.png') }}" alt="" />
                </div>
                <div class="col-lg-6 wow fadeInUp order-lg-first" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h5 class="display-8">Download</h5>
                        <h1 class="display-6">Smektuber Mobile</h1>
                        <h5 class="display-8">Download aplikasi smektuber untuk informasi pendaftaran lebih lanjut</h5>
                        <a class="btn btn-primary py-3 px-4" href="">
                            <i class="fab fa-google-play me-2"></i> Download
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Download End -->
@endsection
