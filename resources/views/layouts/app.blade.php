<!DOCTYPE html>
<html lang="en" data-theme="light">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' | ' . $school_name : $school_name }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    {{-- Ajax Form --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Toastr CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


</head>

<body class="bg-[#e6e7e7]">
    <noscript>You need to enable JavaScript to run this app.....</noscript>

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Goes Here -->
        @include('layouts.sidebar')
        <!-- Sidebar End Here -->


        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden" id="topbar">
            <div class="bg-[#19A7CE] w-full absolute -z-1 h-[20rem]" onclick="closeSidebar()"></div>
            <main class="z-10">
                <div class="w-full flex flex-row laptop:flex-row-reverse justify-between px-8 py-6 items-center laptop:static"
                    id="navbar">
                    <div class="text-white block laptop:hidden" id="toggle-sidebar">
                        <i class="fa fa-solid fa-bars text-xl"></i>
                    </div>
                    <div class="justify-end">
                        <div class="dropdown dropdown-end">
                            <label tabindex="0" class="flex flex-row gap-4 cursor-pointer">
                                <span>
                                    <h1 class="text-white font-semibold">
                                        {{ Auth::user()->name }}
                                    </h1>
                                </span>
                                <span class="text-white">
                                    <i class="fa fa-solid fa-caret-down"></i>
                                </span>
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-4 shadow bg-base-100 rounded-box w-52">
                                <li><a class="active:bg-slate-200 active:text-black">Profil Saya</a></li>
                                <li>
                                    {{-- <a
                                        class="active:bg-red-100 active:text-red-600 text-red-600 hover:bg-red-100">Keluar</a> --}}
                                    <form action="{{ route('logout') }}" method="POST"
                                        class="hover:bg-red-100 active:bg-red-200">
                                        @csrf
                                        <button type="submit" class="text-red-600">Keluar Akun</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @yield('content')
            </main>
        </div>
    </div>


    {{-- <script src="https://cdn.ckeditor.com/4.21.0/basic/ckeditor.js"></script> --}}


    {{-- <script src="//cdn.ckeditor.com/4.21.0/basic/ckeditor.js"></script> --}}
    {{-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/config.js') }}"></script> --}}
    <script src="{{ asset('/js/main.js') }}"></script>

    @yield('script')
    <script type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
</body>

</html>
