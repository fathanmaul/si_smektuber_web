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

    {{-- Contoh di Bawah ini --}}
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet" />
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
            <a href="" class="btn btn-primary py-3 px-5 animated slideInDown"
              >Cek Pendaftaran</a
            >
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
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid" src="img/smk7.png" alt="" />
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
              <!-- <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.
              </p> -->
              <!-- <div class="d-flex align-items-center mb-2">
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
              </div> -->
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
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">123456</h1>
            <p class="fs-5 text-primary mb-0">Today Transactions</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-4" src="img/icon-10.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">123456</h1>
            <p class="fs-5 text-primary mb-0">Monthly Transactions</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">123456</h1>
            <p class="fs-5 text-primary mb-0">Total Transactions</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Why Us!</h1>
          <p class="text-primary fs-5 mb-5">The Best In The crypto Industry</p>
        </div>
        <div class="row g-5">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-7.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Easy To Start</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-6.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Safe & Secure</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-5.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Affordable Plans</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-4.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Secure Storage</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-3.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Protected By Insurance</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-8.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">24/7 Support</h5>
                <span
                  >Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                  sit, sed stet lorem sit clita duo justo</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5">
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
            <div class="service-item bg-white p-5">
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
            <div class="service-item bg-white p-5">
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
            <div class="service-item bg-white p-5">
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
            <div class="service-item bg-white p-5">
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
            <div class="service-item bg-white p-5">
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
            <div class="service-item bg-white p-5">
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

    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Roadmap</h1>
          <p class="text-primary fs-5 mb-5">
            We Translate Your Dream Into Reality
          </p>
        </div>
        <div
          class="owl-carousel roadmap-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>January 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>March 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>May 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>July 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>September 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>November 2045</h5>
            <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Roadmap End -->

    <!-- Token Sale Start -->
    <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Token Sale</h1>
          <p class="text-primary fs-5 mb-5">Token Sale Countdown</p>
        </div>
        <div class="row g-3">
          <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="bg-white text-center p-3">
              <h1 class="mb-0">0</h1>
              <span class="text-primary fs-5">Days</span>
            </div>
          </div>
          <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="bg-white text-center p-3">
              <h1 class="mb-0">0</h1>
              <span class="text-primary fs-5">Hours</span>
            </div>
          </div>
          <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white text-center p-3">
              <h1 class="mb-0">0</h1>
              <span class="text-primary fs-5">Minutes</span>
            </div>
          </div>
          <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="bg-white text-center p-3">
              <h1 class="mb-0">0</h1>
              <span class="text-primary fs-5">Seconds</span>
            </div>
          </div>
          <div class="col-12 text-center py-4">
            <a class="btn btn-primary py-3 px-4" href="">Buy Token</a>
          </div>
          <div class="col-12 text-center">
            <img
              class="img-fluid m-1"
              src="img/payment-1.png"
              alt=""
              style="width: 50px"
            />
            <img
              class="img-fluid m-1"
              src="img/payment-2.png"
              alt=""
              style="width: 50px"
            />
            <img
              class="img-fluid m-1"
              src="img/payment-3.png"
              alt=""
              style="width: 50px"
            />
            <img
              class="img-fluid m-1"
              src="img/payment-4.png"
              alt=""
              style="width: 50px"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Token Sale Start -->

    <!-- FAQs Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">FAQs</h1>
          <p class="text-primary fs-5 mb-5">Frequently Asked Questions</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    How to build a website?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    How long will it take to get a new website?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Do you only create HTML websites?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="true"
                    aria-controls="collapseFour"
                  >
                    Will my website be mobile-friendly?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    Will you maintain my site for me?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="headingSix">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSix"
                    aria-expanded="false"
                    aria-controls="collapseSix"
                  >
                    I’m on a strict budget. Do you have any low cost options?
                  </button>
                </h2>
                <div
                  id="collapseSix"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                <h2 class="accordion-header" id="headingSeven">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven"
                    aria-expanded="false"
                    aria-controls="collapseSeven"
                  >
                    Will you maintain my site for me?
                  </button>
                </h2>
                <div
                  id="collapseSeven"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="headingEight">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseEight"
                    aria-expanded="false"
                    aria-controls="collapseEight"
                  >
                    I’m on a strict budget. Do you have any low cost options?
                  </button>
                </h2>
                <div
                  id="collapseEight"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingEight"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam
                    sed sed magna et magna diam aliquyam amet dolore ipsum erat
                    duo. Sit rebum magna duo labore no diam.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQs Start -->

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
