@extends('includes.app')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Tentang Kami</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About</a></li>
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
                    <img class="img-fluid" src="{{ getAsset('landing/img/smk7.png') }}" alt="" />
                </div>
                <div class="col-lg-6 wow fadeInUp order-lg-first" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">Selayang Pandang</h1>

                        <p>
                            SMKN 7 JEMBER adalah Sekolah Menengah Kejuruan yang terletak di jalan
                            PB.Sudirman No 16 Jatiroto Lor,. Sekolah ini berdiri pada tahun 2007,
                            memang sekolah ini terletak di paling ujung barat Kabupaten Jember,
                            tetapi kelengkapan praktikum sekolah ini tidak kalah dengan SMK lainnya,
                            mengingat umurnya yang masih seumur jagung, sekolah ini juga cukup berprestasi,
                            pasalnya SMK ini pernah meraih juara 2 LKS se-kabupaten Jember di kejuruan Teknik Kendaraan
                            Ringan (TKR) dan juara 3 di kejuruan Teknik Komputer dan Jaringan (TKJ). SMK ini juga
                            mengeluarkan tim Paskibra dalam peringatan HUT RI setiap tahunnya.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <br><br><br>
    <!-- Visi Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-8 text-center mb-5">Visi dan Misi</h2>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="display-10 text-center mb-5">Visi</h3>
                <p class="text-center fs-5">
                    “Terwujudnya tamatan yang berwawasan iptek dan imtaq menuju manusia yang berkepribadian bangsa
                    Indonesia serta berjiwa wirausaha yang berazaskan Pancasila.”</p>
            </div>
        </div>
    </div>
    <!-- Visi End -->

    <!-- Misi Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="display-10 text-center mb-5">Misi</h3>
                <ul class="list-group text-center fs-5">
                    <li class="list-group-item">Membentuk sumber daya manusia yang siap bekerja yang didasari rasa
                        Ikhlas, Iman dan Taqwa.</li>
                    <li class="list-group-item">Membentuk dan membangun sumber daya manusia yang bermoral dan berjiwa
                        wirausaha.</li>
                    <li class="list-group-item">Menyiapkan tamatan yang beretos kerja tinggi, ulet dan siap bersaing di
                        dunia kerja.</li>
                    <li class="list-group-item">Menyiapkan tamatan yang mampu mengembangkan bakat/minatnya guna bekal
                        hidup di masyarakat.</li>
                    <li class="list-group-item">Membangun insan yang berperilaku hidup sehat dan demokratis.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Misi End -->
    <!-- carousel start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2 text-primary">_______</span>
                    <span class="px-2">Jurusan</span>
                    <span class="px-2 text-primary">_______</span>
                </p>
                <h1 class="mb-4">Profile Jurusan</h1>
            </div>
            <div class="row pb-2">
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Jurusan</h4>
                            <a href="/jurusan" class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Jurusan</h4>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Jurusan</h4>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                        </div>
                    </div>
                </div>
                <!-- end Card -->
            </div>

            <!-- carousel end -->
            <!-- carousel start -->
            <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <p class="section-title px-5">
                            <span class="px-2 text-primary">_______</span>
                            <span class="px-2">Kegiatan</span>
                            <span class="px-2 text-primary">_______</span>
                        </p>
                        <h1 class="mb-4">Ekstrakulikuler</h1>
                    </div>
                    <div class="row pb-2">
                        <!-- Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm mb-2">
                                <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}"
                                    alt="" />
                                <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Judul Ekstra</h4>
                                    <a href="/ekstra"
                                        class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                        <!-- end Card -->
                        <!-- Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm mb-2">
                                <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}"
                                    alt="" />
                                <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Judul Ekstra</h4>
                                    <a href=""
                                        class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                        <!-- end Card -->
                        <!-- Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm mb-2">
                                <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}"
                                    alt="" />
                                <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Judul Ekstra</h4>
                                    <a href=""
                                        class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                        <!-- end Card -->
                        <!-- Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="card border-0 shadow-sm mb-2">
                                <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}"
                                    alt="" />
                                <div class="card-body bg-light text-center p-4">
                                    <h4 class="">Judul Ekstra</h4>
                                    <a href=""
                                        class="btn btn-primary px-4 mx-auto my-2 rounded-pill">Selengkapnya</a>

                                </div>
                            </div>
                        </div>
                        <!-- end Card -->
                    </div>

                    <!-- carousel end -->
                @endsection
