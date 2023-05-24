@extends('includes.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Judul Blog Artikel</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/article">Artikel</a></li>
                            <li class="breadcrumb-item"><a href="/blog">Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Content Start -->
    <div class="mt-5">
        <div class="row">
            <div class="col">
                <img src="{{ asset('landing/img/blog_dami.png') }}" class="img-fluid w-50 mx-auto d-block mb-4"
                    alt="Gambar Persegi Panjang">
                <h5 class="text-center">Diposting: 2 Januari 2004</h5>
                <br>
                <p class="text-center mx-auto" style="max-width: 600px;">
                    Informatika (Inggris: Informatics) merupakan ilmu yang baik mempelajari terkait penggunaan komputer
                    untuk mengatur dan menganalisis data yang berukuran besar, baik data maupun informasi pada mesin
                    berbasis komputasi.[1][2] Disiplin ilmu ini mencakup beberapa macam bidang, termasuk di dalamnya:
                    sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem
                    informasi manajemen. Secara umum informatika mempelajari struktur, sifat, dan interaksi dari beberapa
                    sistem yang dipakai untuk mengumpulkan data, memproses dan menyimpan hasil pemrosesan data, serta
                    menampilkannya dalam bentuk informasi.[3][4] Aspek dari informatika lebih luas dari sekadar sistem
                    informasi berbasis komputer saja, tetapi masih banyak informasi tidak dan belum diproses dengan
                    komputer.
                    <br><br>
                    Informatika mempunyai konsep dasar, teori, dan perkembangan aplikasi tersendiri. Informatika dapat
                    mendukung dan berkaitan dengan aspek kognitif dan sosial, termasuk tentang pengaruh serta akibat
                    sosial dari teknologi informasi pada umumnya. Penggunaan informasi dalam beberapa macam bidang,
                    seperti bioinformatika, informatika medis, dan informasi yang mendukung ilmu perpustakaan,
                    merupakan beberapa contoh yang lain dari bidang informatika.
                </p>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection
