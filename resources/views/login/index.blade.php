<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOGIN</title>
  <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  {{-- <div class="h-screen flex flex-row">
    <div class="h-full bg-white w-[40%] relative">
      <div class="h-full  absolute w-full">
        <div class="flex flex-col mx-[3rem] h-full">
          <div class="flex flex-col items-center justify-center gap-4 mt-20">
            <div class="justify-center items-center">
              <img src="{{ asset('assets/favicon/smk-logo.png') }}" alt="">
            </div>
            <div>
              <h1 class="font-bold text-2xl text-[#363636]">SMK Negeri 7 Jember</h1>
            </div>
          </div>
          <div class="mt-10">
            <h1 class="font-bold text-2xl">Masuk</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="h-full bg-gradient-to-b from-[#ECF2FF] to-[#FEFDDA] w-[60%]">

    </div>

  </div> --}}

  <div class="h-screen flex flex-row">
    <div class="h-full phone:w-[41%] flex-1 bg-white">
      {{-- <div class="w-full h-12 flex items-center py-12 px-6 absolute">
        <img src="{{ asset('assets/favicon/smk-logo.png') }}" class="w-12" alt="">
        <h1 class="ml-3 font-bold">SMK Negeri 7 Jember</h1>
      </div> --}}
      <div class="h-full flex flex-col items-center justify-center">
        <div class="m-24">
          <div class="flex flex-col justify-center items-center gap-4 -mt-8 mb-8">
            <img src="{{ asset('assets/favicon/smk-logo.png') }}" class="w-24" alt="">
            <h1 class="ml-3 font-bold text-2xl">SMK Negeri 7 Jember</h1>
          </div>
          <h1 class="text-2xl font-bold mb-6">Masuk</h1>
          <form method="POST">
            <label for="" class="appearance-none my-4 text-sm">Username</label>
            <div class="mb-4 mt-2">
              <input type="text" name="username" class="input p-3 w-[20rem]"
                autofocus value="" placeholder="Masukkan username">
            </div>
            <label for="" class="appearance-none text-sm">Password</label>
            <div class="mt-2">
              <input type="password" name="password" class="input w-[20rem] p-3" placeholder="Masukkan password">
            </div>
            <div class="mt-4">
              {{-- <button class="btn w-[20rem] bg-[#19A7CE] hover:bg-[#1695b8]" type="submit">LOGIN</button> --}}
              <a href="{{ url('/dashboard') }}" class="btn text-center bg-[#19A7CE] hover:bg-[#1695b8]">LOGIN</a>
            </div>
          </form>
          <div class="flex justify-between py-4">
            <p class="text-sm transition-all duration-150 ease-in-out">Lupa
              Password?<span><a href="#" class="text-blue-500 hover:text-blue-800 transition-all duration-200 ease-in-out"> Klik disini</a></span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="h-full hidden laptop:block w-[59%] bg-[#F1F5FD]">
      <div class="flex justify-center items-center h-full">
        <div class="flex flex-col justify-start items-center gap-4 ml-8">
          {{-- <h1 class="ml-3 font-bold text-[4rem] text-white">Selamat Datang</h1> --}}
        </div>
      </div>
    </div>
  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
