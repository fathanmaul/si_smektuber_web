<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  {{-- <div class="min-h-screen flex flex-row bg-[#F0F4F9]">
    <nav
      class="bg-white flex flex-col w-[287px] min-h-screen -ml-[287px] sm:ml-0 md:-ml-[200px] transition-all ease-in-out duration-300">
      <div class="flex flex-col items-center justify-center mt-4">
        <div class="flex flex-row items-center justify-center gap-2">
          <img src="{{ asset('assets/favicon/smk-logo.png') }}" class="w-12" alt="">
          <h1 class="font-bold text-md mt-2">SMKN 7 Jember</h1>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="flex flex-row justify-between items-center mx-8 mt-10">
        <div>
          <h1 class="font-extrabold font-nunito text-2xl">Daftar User</h1>
        </div>
        <div>
          <button
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            type="button">
            Tambah
          </button>
        </div>
      </div>
      <div class="card py-8 px-4 mt-8 mx-8">
        <div class="overflow-x-auto">
          <table class="w-full overflow-x-scroll">
            <thead>
              <tr>
                <th class="px-4 py-2 md:w-[20px]">No</th>
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left md:w-[190px]">Region</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="flex min-h-screen">
    <div
      class="fixed -ml-[280px] laptop:ml-0 laptop:block left-0 top-0 w-[280px] transition-all ease-in-out duration-200 bg-white h-full">
      <div class="px-4 py-4">
        <div class="flex items-center justify-start gap-4">
          <img src="{{ asset('assets/favicon/smk-logo.png') }}" class="w-12" alt="">
          <h1 class="font-bold text-md mt-2">SMKN 7 Jember</h1>
        </div>
      </div>
    </div>
    <div class="ml-0 laptop:ml-[280px] transition-all ease-in-out duration-200 w-full min-h-full bg-slate-100">
      <h1>Content</h1>
    </div>
  </div>

</body>

<script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
