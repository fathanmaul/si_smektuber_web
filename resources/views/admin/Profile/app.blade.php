<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title . ' | ' . $school_name : $school_name }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ getAsset('assets/favicon/smk-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ getAsset('css/app.css') }}">
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    {{-- Ajax Form --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('header_link')
</head>

<body>
    <div class="absolute inset-y-0 left-0 w-full h-64 bg-primary"></div>


    <div class="ml-0 h-fit">
        {{-- Header Goes Here --}}
        <div class="navbar shadow-lg lg:shadow-none bg-base-100 px-4 z-20 justify-between fixed lg:static">

            <div class="flex-1 w-full flex items-center justify-end">
                <div class="dropdown dropdown-end lg:absolute">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://i.pinimg.com/564x/73/14/cc/7314cc1a88bf3cdc48347ab186e12e81.jpg" />
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-center" href="{{ route('akun.index') }}">
                                Profil
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST"
                                class="hover:bg-red-100 active:bg-red-200 h-full pb-2 mb-0">
                                @csrf
                                <button type="submit" class="text-red-600 h-full w-full">Keluar Akun</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Header Ends Here --}}

        {{-- Container --}}
        <div class="container py-4 px-4 sm:pl-0 z-20 h-full md:pl-8 lg:pl-8 xl:pl-8" id="contentSide">
            <div class="mt-12 lg:mt-0">
                {{-- Content Goes Here --}}
                <div class="py-4 lg:py-2 relative">
                    @yield('content')
                </div>
                {{-- Content Ends Here --}}
            </div>
        </div>

        {{-- Container Ends --}}
    </div>

    <script src="{{ getAsset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    {{-- <script src="{{ getAsset('js/sidebar.js') }}"></script> --}}
    <script src="https://kit.fontawesome.com/9aa9764949.js" crossorigin="anonymous"></script>
    @yield('script')

</body>

</html>
