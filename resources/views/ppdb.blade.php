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
    <div class="container-fluid hero-header bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Services
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="animation-duration: 3s"
              src="img/hero-2.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Services</h1>
          <p class="text-primary fs-5 mb-5">
            Buy, Sell And Exchange Cryptocurrency
          </p>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-7.png" alt="" />
              <h5 class="mb-3">Currency Wallet</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-3.png" alt="" />
              <h5 class="mb-3">Currency Transaction</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
              <h5 class="mb-3">Bitcoin Investment</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
              <h5 class="mb-3">Currency Exchange</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
              <h5 class="mb-3">Bitcoin Escrow</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light p-5">
              <img class="img-fluid mb-4" src="img/icon-8.png" alt="" />
              <h5 class="mb-3">Token Sale</h5>
              <p>
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo
              </p>
              <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->
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
              <img class="card-img-top mb-2" src="img/blog_dami.png" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Ini artikel menarik cuman masih dami</h4>

                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <!-- end Card -->
          <!-- Card -->
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="img/blog_dami.png" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Ini artikel menarik cuman masih dami</h4>

                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <!-- end Card -->
          <!-- Card -->
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="img/blog_dami.png" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Ini artikel menarik cuman masih dami</h4>

                <a href="" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <!-- end Card -->
        </div>
      </div>
    </div>
    <!-- Blog End -->

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
