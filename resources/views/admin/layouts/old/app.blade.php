<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ' SMK 7 JEMBER' }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-[#f2f7ff]">
    <div class="min-h-screen flex flex-row">
        {{-- Sidebar Start Here --}}
        @include('layouts.sidebar')
        {{-- Sidebar End Here --}}


        {{-- Main Content Start Here --}}
        <div class="bg-[#19A7CE] w-full absolute h-[19rem] -z-10">
        </div>
        <div class="main-content ml-[300px] min-h-full w-full flex flex-col overflow-y-auto pb-16 transition-all duration-300 ease-in-out" id="content">
            <header class=" w-full bg-slate-100 fixed laptop:bg-transparent laptop:static">
                <div class="px-8 flex flex-row items-center  justify-between h-20 w-full">
                    <div class="text-white cursor-pointer" id="btnOpen">
                        <span>
                            <i class="fa fa-solid fa-bars text-lg text-slate-800 laptop:text-white"></i>
                        </span>
                    </div>
                    <div class="flex flex-row items-center">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-slate-800 hover:text-slate-600 laptop:text-white laptop:hover:text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                            type="button">{{ 'user' }} <svg class="w-4 h-4 ml-2" aria-hidden="true"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil
                                        Saya</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-red-200 text-red-600 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mt-28 container laptop:mt-4">
                @yield('content')

            </div>
        </div>
        {{-- Main Content End Here --}}


    </div>



    {{-- If you want to include extra script. Write Down here --}}
    @yield('script')
    {{-- End Extra Script --}}
    
    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>




</html>
