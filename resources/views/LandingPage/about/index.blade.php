@extends('includes.app')

@section('content')

 <!-- Header Start -->
 <div class="container-fluid hero-header bg-light py-3 mb-3">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-4 mb-3 animated slideInDown">Tentang kami</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="breadcrumb-item" href="">Home</a></p>
      <p class="m-0 px-2 text-primary">/</p>
      <p class="m-0 breadcrumb-item active">Tentang Kami</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <img class="img-fluid" src="landing/img/logo_smektuber_hero.png" alt="" />
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
          <h1 class="display-6">Tentang Kami</h1>
          {{-- <p class="text-primary fs-5 mb-4">
            The Most Trusted Cryptocurrency Platform
          </p> --}}
          <p>
          SMKN 7 JEMBER adalah Sekolah Menengah Kejuruan yang terletak di jalan 
          PB.Sudirman No 16 Jatiroto Lor,. Sekolah ini berdiri pada tahun 2007,
          memang sekolah ini terletak di paling ujung barat Kabupaten Jember,
          tetapi kelengkapan praktikum sekolah ini tidak kalah dengan SMK lainnya, 
          mengingat umurnya yang masih seumur jagung, sekolah ini juga cukup berprestasi,
          pasalnya SMK ini pernah meraih juara 2 LKS se-kabupaten Jember di kejuruan Teknik Kendaraan Ringan (TKR) dan juara 3 di kejuruan Teknik Komputer dan Jaringan (TKJ). SMK ini juga mengeluarkan tim Paskibra dalam peringatan HUT RI setiap tahunnya.
          </p>
         
          <div class="d-flex align-items-center mb-2">
            <i
              class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"
            ></i>
            <span>Tempor erat elitr rebum at clita</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <i
              class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"
            ></i>
            <span>Tempor erat elitr rebum at clita</span>
          </div>
          <div class="d-flex align-items-center mb-4">
            <i
              class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"
            ></i>
            <span>Tempor erat elitr rebum at clita</span>
          </div>
          <a class="btn btn-primary py-3 px-4" href="">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


@endsection