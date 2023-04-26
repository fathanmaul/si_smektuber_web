<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ' SMK 7 JEMBER' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- JQUERY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="bg-[#F2F7FF]">
    <noscript>You need to enable JavaScript to run this app.....</noscript>

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar Goes Here -->
        @include('layouts.sidebar')
        <!-- Sidebar End Here -->


        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
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
                                    <h1 class="text-white font-semibold">Fathan Maulana</h1>
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

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    @yield('script')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
</body>

</html>
