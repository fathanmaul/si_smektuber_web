<aside
    class="absolute left-0 top-0 z-[9999] flex min-h-screen max-h-screen w-[280px] flex-col drop-shadow-lg overflow-y-hidden bg-white duration-300 ease-in-out laptop:static laptop:translate-x-0 -translate-x-full"
    id="sidebar">
    <div class="flex flex-col w-full">
        <div class="flex flex-row justify-center py-8 items-center gap-4">
            <div class="h-[50px] w-[55px]">
                <img src="{{ asset('assets/images/logo/logo-smk7.png') }}" alt="logo"
                    class="w-full h-full object-cover object-center rounded-xl">
            </div>
            <div class="pt-2">
                <h1 class="font-bold text-md">SMK Negeri 7</h1>
                <h1 class="font-bold text-md">Jember</h1>
            </div>
            <div id="toggle-sidebar-close" class="laptop:hidden ml-8">
                <i class="fa fa-solid fa-xmark text-xl"></i>
            </div>
        </div>
        <div class="divider mx-8 -mt-1 -mb-1"></div>
        <div class="">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li class="mt-[0.2rem]">
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <div class="w-5 h-5 p-4 flex justify-center items-center">
                                <i class="fa fa-solid fa-gauge"></i>
                            </div>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="mt-[0.2rem]">
                        <div class="collapse">
                            <input type="checkbox" class="peer"
                                {{ request()->segment(2) == 'sekolah' ? 'checked' : '' }} />
                            <div
                                class="collapse-title flex items-center p-3 text-[1rem] w-full rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'sekolah' ? 'active' : '' }}">
                                <div class="w-5 h-5 p-4 flex justify-center items-center">
                                    <i class="fa fa-solid fa-school"></i>
                                </div>
                                <span class="ml-4 w-full flex flex-row justify-between items-center pr-3">
                                    <span>Profil Sekolah</span>
                                    <span>
                                        <i class="fa fa-solid fa-caret-down"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="collapse-content px-0 text-black mt-1">
                                <div class="w-full">
                                    <ul class="space-y-2 font-medium">
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.sejarah') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                                                 {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'sejarah' ? 'active' : '' }}">
                                                <span class="ml-4">Profil & Sejarah</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.visi-misi') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                                                {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'visi-misi' ? 'active' : '' }}">
                                                <span class="ml-4">Visi & Misi</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.kepala-sekolah') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                                                <span class="ml-4">Kepala Sekolah</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li> --}}
                    {{-- Informasi Sekolah --}}
                    <li class="mt-[0.2rem]">
                        <div class="collapse">
                            <input type="checkbox" class="peer"
                                {{ request()->segment(2) == 'sekolah' ? 'checked' : '' }} />
                            <div
                                class="collapse-title flex items-center p-3 text-[1rem] w-full rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'sekolah' ? 'active' : '' }}">
                                <div class="w-5 h-5 p-4 flex justify-center items-center">
                                    <i class="fa fa-solid fa-school"></i>
                                </div>
                                <span class="ml-4 w-full flex flex-row justify-between items-center pr-3">
                                    <span>Informasi Sekolah</span>
                                    <span>
                                        <i class="fa fa-solid fa-caret-down"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="collapse-content px-0 text-black mt-1">
                                <div class="w-full">
                                    <ul class="space-y-2 font-medium">
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.umum') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                                                 {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'umum' ? 'active' : '' }}">
                                                <span class="ml-4">Informasi Umum</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.visi-misi') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                                                {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'visi-misi' ? 'active' : '' }}">
                                                <span class="ml-4">Visi & Misi</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.kepala-sekolah') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'kepala-sekolah' ? 'active' : '' }}">
                                                <span class="ml-4">Kepala Sekolah</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.prestasi') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'prestasi-sekolah' ? 'active' : '' }}">
                                                <span class="ml-4">Prestasi Sekolah</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="{{ route('sekolah.ekstrakurikuler') }}"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'sekolah' && request()->segment(3) == 'ekstrakurikuler' ? 'active' : '' }}">
                                                <span class="ml-4">Ekstrakurikuler</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="{{ url('admin/jurusan') }}"
                            class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(2) == 'jurusan' ? 'active' : '' }}">
                            <div class="w-5 h-5 p-4 flex justify-center items-center">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <span class="ml-4">Jurusan</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="{{ route('ekstrakurikuler.index') }}"
                            class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                            {{ request()->segment(2) == 'ekstrakurikuler' ? 'active' : '' }}
                            ">
                            <div class="w-5 h-5 p-4 flex justify-center items-center">
                                <i class="fa fa-solid fa-futbol"></i>
                            </div>
                            <span class="ml-4">Ekstrakurikuler</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="{{ route('prestasi.index') }}"
                            class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white
                            {{ request()->segment(2) == 'prestasi' ? 'active' : '' }}
                            ">
                            <div class="w-5 h-5 p-4 flex justify-center items-center">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <span class="ml-4">Prestasi</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <div class="collapse">
                            <input type="checkbox" class="peer" />
                            <div
                                class="collapse-title flex items-center p-3 text-[1rem] w-full rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                                <div class="w-5 h-5 p-4 flex justify-center items-center">
                                    <i class="fa fa-solid fa-file-pen"></i>
                                </div>
                                <span class="ml-4 w-full flex flex-row justify-between items-center pr-3">
                                    <span>PPDB</span>
                                    <span>
                                        <i class="fa fa-solid fa-caret-down"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="collapse-content px-0 text-black">
                                <div class="w-full">
                                    <ul class="space-y-2 font-medium">
                                        <li class="mt-[0.2rem]">
                                            <a href="#"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all">
                                                <span class="ml-4">Daftar PPDB</span>
                                            </a>
                                        </li>
                                        <li class="mt-[0.2rem]">
                                            <a href="#"
                                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all">
                                                <span class="ml-4">Data Pendaftar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li cz
                        @if (Auth::user()->role_id == 1) <li class="mt-[0.2rem]">
                            <a href="#"
                                class="flex items-center p-3 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                                <div class="w-5 h-5 p-4 flex justify-center items-center">
                                    <i class="fa-solid fa-user-gear"></i>
                                </div>
                                <span class="ml-4">Admin</span>
                            </a>
                        </li> @endif
                        </ul>
            </div>
        </div>


    </div>
</aside>
