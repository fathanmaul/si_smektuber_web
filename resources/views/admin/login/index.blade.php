<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="{{ getAsset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    {{-- <link href="{{ getAsset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ getAsset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="h-screen flex flex-row">
        <div class="h-full flex-1 bg-white">
            <div class="h-full flex flex-col items-center justify-center">
                <div class="m-24">
                    <div class="flex flex-col justify-center items-center gap-4 -mt-8 mb-8">
                        <img src="{{ getAsset('assets/favicon/smk-logo.png') }}" class="w-24" alt="">
                        <h1 class="ml-3 font-bold text-2xl">{{ $school_name ?? 'Silahkan Login!' }}</h1>
                    </div>
                    <h1 class="text-2xl font-bold mb-6">Masuk</h1>
                    <div class="mb-4">
                        <x-alert />
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="" class="appearance-none my-4 text-sm">Username</label>
                        {{-- <div class="mb-4 mt-2">
                            <input type="text" name="username" class="input input-bordered w-full max-w-xs
                            @error('username')
                                input-error
                            @enderror
                            " autofocus
                                value="{{ old('username') }}" placeholder="Masukkan username">
                            @error('username')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="flex relative w-full items-center mt-2">
                            <span class="absolute left-4"><i
                                    class="fa-regular fa-user @error('username')
                                text-red-600
                            @enderror"></i></span>
                            <input type="text"
                                class="w-full h-[40px] py-[1.40rem] pl-10 border-2 rounded-lg outline-none text-slate-800 transition-all ease-in-out duration-300 hover:shadow-lg focus:shadow-lg dark:bg-white
                            @error('username') border-red-500 @enderror"
                                placeholder="Username" id="username" name="username" value="{{ old('username') }}">
                        </div>

                        @error('username')
                            <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                        <div class="mt-4">
                            <label for="" class="text-sm">Password</label>
                            <div class="mt-2">

                                <div class="flex relative w-full items-center mt-2">
                                    <span class="absolute left-4"><i
                                            class="fa-solid fa-key @error('password_1')
                                        text-red-600
                                        @enderror"></i></span>
                                    <input type="password"
                                        class="w-full h-[40px] py-[1.40rem] pr-10 pl-10 border-2 rounded-lg outline-none  text-slate-800 transition-all ease-in-out duration-300 hover:shadow-lg focus:shadow-lg
                                    @error('password_1') border-red-500 @enderror"
                                        placeholder="Password" name="password_1">

                                    <span class="reveal absolute right-4 cursor-pointer">
                                        <i class="fa-sharp fa-solid fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                            @error('password_1')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <button class="btn w-[20rem] bg-[#19A7CE] border-none hover:bg-[#158bac]"
                                type="submit">LOGIN</button>
                            {{-- <a href="{{ url('/dashboard') }}" class="btn text-center bg-[#19A7CE] hover:bg-[#1695b8]">LOGIN</a> --}}
                        </div>
                    </form>
                    {{-- <div class="flex justify-between py-4">
                        <p class="text-sm transition-all duration-150 ease-in-out">Lupa
                            Password?<span><a href="#"
                                    class="text-blue-500 hover:text-blue-800 transition-all duration-200 ease-in-out">
                                    Klik disini</a></span></p>
                    </div> --}}
                </div>
            </div>
        </div>


        {{-- <div class="h-full hidden laptop:block w-[59%] bg-cover brightness-50"
            style="background-image: url('{{ getAsset('assets/images/sekolah/foto.png') }}')">
            <div class="flex justify-center items-center h-full">
                <div class="flex flex-col justify-start items-center gap-4 ml-8">
              
                </div>
            </div>
        </div> --}}
        <div class="h-full hidden laptop:block w-[59%] bg-gradient-to-br from-primary to-blue-400">
            <div class="flex flex-col justify-center items-center h-full mx-32">
                <h3 class="text-white text-4xl font-bold">
                    Selamat Datang, di {{ $school_name }}
                </h3>   
                <h3 class="text-white text-2xl font-normal">
                    Silahkan masukkan Username dan Password Anda untuk mengakses aplikasi
                </h3>   
            </div>
        </div>
    </div>
</body>
<script src="{{ getAsset('js/app.js') }}"></script>

<script src="{{ getAsset('js/admin/auth/main.js') }}"></script>
<script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>

</html>
