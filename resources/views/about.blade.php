<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CryptoCoin - Free Cryptocurrency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('includes.navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <!-- <div class="container-fluid hero-header bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  About Us
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="animation-duration: 3s"
              src="img/logo_smektuber_hero.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div> -->
    <!-- Header End -->

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
            <img class="img-fluid" src="img/logo_smektuber_hero.png" alt="" />
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6">Tentang Kami</h1>
              <p class="text-primary fs-5 mb-4">
                The Most Trusted Cryptocurrency Platform
              </p>
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

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
