<nav class="p-5 bg-white md:flex md:items-center md:justify-between lg:px-[6rem] transition-all ease-in-out duration-300"
    id="navbar">
    <div class="flex justify-between items-center z-[2]">
        <span class="text-xl cursor-pointer flex flex-row items-center gap-4">
            <div class="w-[50px] h-full">
                <img src="{{getAsset('assets\images\logo\logo-smk7.png')}}" alt="smk" class="w-full h-full object-cover" />
            </div>
            <h4 class="font-bold md:block text-sm text-slate-800">
                SMK N 7 JEMBER
            </h4>
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>


    @php
        $route = Route::currentRouteName();
        $tentang = Route::currentRouteName('landing.tentang.*');
        
    @endphp
    <ul
        class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in-out duration-500 list-none">
        <li class="mx-1 my-6 md:my-0 md:mx-4">
            <a href="{{ route('landing.index') }}"
                class="text-base hover:text-slate-500 duration-300 {{ $route == 'landing.index' ? 'border-b border-blue-500 pb-2' : '' }}">Beranda</a>
        </li>
        <li class="mx-1 my-6 md:my-0 md:mx-4">
            <!-- <a href="#" class="text-base hover:text-slate-500 duration-300">Tentang</a> -->
            <div class="dropdown dropdown-bottom">
                <label tabindex="0"
                    class="cursor-pointer {{ $route == 'landing.tentang.profil' || $route == 'landing.tentang.jurusan' || $route == 'landing.tentang.ekstrakurikuler' ? 'border-b border-blue-500 pb-2' : '' }}">Tentang</label>
                <ul tabindex="0" class="menu dropdown-content p-2 bg-gray-100 shadow-xl rounded-box w-52 mt-4">
                    <li><a href="{{ route('landing.tentang.profil') }}">Profil Sekolah</a></li>
                    <li><a href="{{ route('landing.tentang.jurusan') }}">Jurusan</a></li>
                    <li><a href="{{ route('landing.tentang.ekstrakurikuler')}}">Ekstrakurikuler</a></li>
                </ul>
            </div>
        </li>
        <li class="mx-1 my-6 md:my-0 md:mx-4 {{ $route == 'landing.artikel.index' ? 'border-b border-blue-500' : '' }}">
            <a href="{{ route('landing.artikel.index') }}" class="text-base hover:text-slate-500 duration-300">Artikel</a>
        </li>
        <li class="mx-1 my-6 md:my-0 md:mx-4">
            <a href="{{route('landing.ppdb.index')}}" class="text-base hover:text-slate-500 duration-300">PPDB</a>
        </li>
        {{-- <li class="mx-1 my-6 md:my-0 md:mx-4">
            <a href="#" class="text-base hover:text-slate-500 duration-300">Konsultasi</a>
        </li> --}}
        <h2 class=""></h2>
    </ul>
</nav>
