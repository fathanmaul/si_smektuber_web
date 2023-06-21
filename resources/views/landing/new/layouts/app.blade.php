<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMK N 7 Jember</title>
  {{-- <link rel="stylesheet" href="../../dist/css/app.css" /> --}}
  <link rel="stylesheet" href="{{ getAsset('css/app.css') }}">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  {{-- <link rel="shortcut icon" href="../../dist/assets/img/logo/logo-smk7.png" type="image/x-icon"> --}}
  <link rel="shortcut icon" href="{{ getAsset('assets\images\logo\logo-smk7.png') }}" type="image/x-icon">
  {{-- <link rel="favicon" href="{{ getAsset('assets\images\logo\logo-smk7.png') }}"> --}}
</head>

<body class="bg-white">
  {{-- Navbar Goes Here --}}
  @include('landing.new.layouts.navbar')
  {{-- Navbar end Here --}}
  <div class="z-[-2]" id="app">
    {{-- Content Goes Here --}}
    @yield('content')
    {{-- Content End Here --}}
    <footer class="py-10 px-10 bg-[#007bbd]">
      <div class="container">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <div class="flex-1 flex flex-col gap-4 w-full text-white max-w-lg">
            <div class="flex flex-col gap-4">
              <h1 class="text-white text-2xl font-bold">Tentang Kami</h1>
              <p class="text-sm text-justify">{{ $school_info->school_history ?? 'SMK Negeri 7 Jember adalah Sekolah Kejuruan Unggulan di Jember yang berlokasi di Jl. Randu Agung Jatiroto, Jam Koong, Jatiroto, Kec. Sumberbaru, Kabupaten Jember, Jawa Timur 68156' }}</p>
            </div>
            <div class="flex flex-col gap-4">
              <h1 class="text-white text-2xl font-bold">Kontak Kami</h1>
              <ul class="flex flex-col gap-4">
                <li class="flex items-center flex-row gap-4">
                  <ion-icon name="call"></ion-icon>
                  <p class="text-sm">{{ $school_info->school_phone }}</p>
                </li>
                <li class="flex items-center flex-row gap-4">
                  <ion-icon name="mail"></ion-icon>
                  <p class="text-sm">{{ $school_info->school_email }}</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="flex-1 flex flex-col gap-4">
            <h1 class="text-white text-2xl font-bold">Lokasi Sekolah</h1>
            <div class="w-[100%] h-[100%]">
              <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=V9QF+C2J,%20Jl.%20Randu%20Agung%20Jatiroto,%20Jam%20Koong,%20Jatiroto,%20Kec.%20Sumberbaru,%20Kabupaten%20Jember,%20Jawa%20Timur%2068156+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                  href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      window.onscroll = () => {
        let nav = document.querySelector("#navbar");
        let content = document.querySelector("#app");
        if (
          document.body.scrollTop > 10 ||
          document.documentElement.scrollTop > 10
        ) {
          nav.classList.add("fixed");
          nav.classList.add("w-full");
          nav.classList.add("z-[999]");
          nav.classList.add("shadow-lg");
        } else {
          nav.classList.remove("fixed", "w-full", "z-[999]");
          nav.classList.remove("shadow-lg");
        }
      };
    });
  </script>
  <script>
    function Menu(e) {
      let list = document.querySelector("ul");
      e.name === "menu"
        ? ((e.name = "close"),
          list.classList.add("top-[80px]"),
          list.classList.add("opacity-100"))
        : ((e.name = "menu"),
          list.classList.remove("top-[80px]"),
          list.classList.remove("opacity-100"));
    }
  </script>
</body>

</html>