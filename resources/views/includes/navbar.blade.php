<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <!-- <h2 class="m-0 text-primary">
          <img
            class="img-fluid me-2"
            src="img/smektuber.png"
            alt=""
            style="width: 45px"
          />Sistem Informasi SMKN 7 Jember
        </h2> -->
        <img src="img/Logo_smektuber.png" style="width: 200px" class="img-fluid me-2 align-items-center pt-3 pb-3" />
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
            <a href="/ppdb" class="nav-item nav-link {{ Request::is('ppdb') ? 'active' : '' }}">PPDB</a>
            <a href="/article" class="nav-item nav-link {{ Request::is('article') ? 'active' : '' }}">Artikel</a>

            <a href="contact.html" class="nav-item nav-link">Konsultasi</a>
        </div>
        <a href="" class="btn btn-primary px-4">Sign in </a>

    </div>
</nav>
<!-- Navbar End -->
