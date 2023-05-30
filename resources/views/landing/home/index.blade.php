@extends('includes.app')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-2 mb-2">
        <div class="container py-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">
                        Sistem Informasi SMKN 7 Jember
                    </h1>
                    <p class="animated slideInDown">
                        Bergabunglah bersama kami dan jadi bagian dari keluarga smektuber
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Cek Pendaftaran</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    {{-- <img class="img-fluid animated pulse infinite" style="animation-duration: 3s"
                        src="{{ getAsset('landing/img/logo_smektuber_hero.png') }}" alt="" /> --}}
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s"
                        src="{{ getAsset('assets/images/img-not-found.png') }}" alt="" />
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
                    <img class="img-fluid" src="{{ getAsset('landing/img/smk7.png') }}" alt="" />
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Tentang Kami</h1>
                        <!-- <p class="text-primary fs-5 mb-4">
                    The Most Trusted Cryptocurrency Platform
                  </p> -->
                        <p>
                            SMKN 7 JEMBER adalah Sekolah Menengah Kejuruan yang terletak di
                            jalan PB.Sudirman No 16 Jatiroto Lor,. Sekolah ini berdiri pada
                            tahun 2007, memang sekolah ini terletak di paling ujung barat
                            Kabupaten Jember, tetapi kelengkapan praktikum sekolah ini tidak
                            kalah dengan SMK lainnya, mengingat umurnya yang masih seumur
                            jagung, sekolah ini juga cukup berprestasi, pasalnya SMK ini
                            pernah meraih juara 2 LKS se-kabupaten Jember di kejuruan Teknik
                            Kendaraan Ringan (TKR) dan juara 3 di kejuruan Teknik Komputer
                            dan Jaringan (TKJ). SMK ini juga mengeluarkan tim Paskibra dalam
                            peringatan HUT RI setiap tahunnya.
                        </p>

                        <a class="btn btn-primary py-3 px-4" href="">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid mb-4" src="{{ asset('landing/img/icon-9.png') }}" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">5</h1>
                    <p class="fs-5 text-primary mb-0">Total Jurusan</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid mb-4"src="{{ asset('landing/img/icon-10.png') }}" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">5</h1>
                    <p class="fs-5 text-primary mb-0">Total Ekstrakulikuler</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid mb-4" src="{{ asset('landing/img/icon-2.png') }}" alt="" />
                    <h1 class="display-4" data-toggle="counter-up">100</h1>
                    <p class="fs-5 text-primary mb-0">Total Prestasi</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Ini artikel menarik cuman masih dami</h4>

                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Ini artikel menarik cuman masih dami</h4>

                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ asset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Ini artikel menarik cuman masih dami</h4>

                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
