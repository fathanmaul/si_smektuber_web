@php
    $route = Route::currentRouteName();
    $ppdb_daftar = Route::currentRouteNamed('ppdb.daftar.*');
    $artikel = Route::currentRouteNamed('artikel.*');
@endphp
<div
    class="sidebar w-[280px] h-full top-0 bottom-0 bg-white text-white rounded-md fixed overflow-y-auto lg:translate-x-0 transition-all ease-in-out duration-300 -translate-x-full z-[100] shadow-lg">
    <div class="max-h-[calc(100vh - 9rem)] overflow-y-auto">
        <div class="px-6 pt-8">
            <div class="flex items-end justify-between">
                <div class="flex-1 flex items-center text-gray-900">
                    <a href="#" class="p-2 rounded-lg flex justify-center items-center">
                        <div class="w-10">
                            <img src="{{ asset('assets/images/logo/logo-smk7.png') }}" alt="">
                        </div>
                    </a>
                    <span class="text-sm font-semibold">{{ $school_name }}</span>
                </div>
                <button class="toggle-sidebar bg-white lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 flex justify-center items-center fill-current text-gray-600"
                        viewBox="0 0 512 512">
                        <path
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="px-6 pt-6">
            <ul class="flex flex-col space-y-2">
                <li class="">
                    <a href="{{ route('dashboard') }}"
                        class="nav-item flex flex-row items-center gap-3 text-sm font-semibold px-4  py-4 rounded fill-current {{ request()->segment(2) == 'dashboard' ? 'nav-active' : '' }}">
                        <svg class="w-5 h-5 flex items-center justify-center" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm320 96c0-26.9-16.5-49.9-40-59.3V88c0-13.3-10.7-24-24-24s-24 10.7-24 24V292.7c-23.5 9.5-40 32.5-40 59.3c0 35.3 28.7 64 64 64s64-28.7 64-64zM144 176a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm-16 80a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM400 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div
                        class="collapse fill-current transition-colors rounded hover:bg-[#19a7ce2f] {{ request()->segment(2) == 'sekolah' ? 'hover:bg-transparent' : '' }}">
                        <input type="checkbox" class="peer"
                            {{ request()->segment(2) == 'sekolah' ? 'checked' : '' }} />
                        <div
                            class="hover:bg-[#19a7ce2f] collapse-title p-3 w-full text-gray-900  flex flex-row items-center text-sm gap-1  py-0 fill-current {{ request()->segment(2) == 'sekolah' ? 'nav-active text-primary hover:bg-transparent' : '' }}">
                            <span class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                    class="w-5 h-5 flex items-center justify-center ">
                                    <path
                                        d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" />
                                </svg>
                            </span>
                            <span
                                class="ml-2 text-sm font-semibold w-full flex items-center justify-between {{ request()->segment(2) == 'sekolah' ? 'nav-active bg-transparent hover:bg-transparent' : '' }} ">
                                Informasi Sekolah
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 h-3">
                                    <path
                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse-content text-sm">
                            <div class="sub-menu pt-2">
                                <ul
                                    class="list-none flex flex-col gap-1 ml-2 pl-2 text-gray-900 border-l border-gray-500 {{ request()->segment(2) == 'sekolah' ? 'border-primary' : '' }}">
                                    <li><a href="{{ route('sekolah.umum') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ request()->segment(3) == 'umum' ? 'nav-active' : '' }}">Informasi
                                            Umum</a>
                                    </li>
                                    <li><a href="{{ route('sekolah.visi-misi') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ request()->segment(3) == 'visi-misi' ? 'nav-active' : '' }}">Visi
                                            Misi</a></li>
                                    <li><a href="{{ route('sekolah.kepala-sekolah') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ request()->segment(3) == 'kepala-sekolah' ? 'nav-active' : '' }}">Kepala
                                            Sekolah</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Jurusan --}}
                <li>
                    <div
                        class="collapse fill-current transition-colors rounded hover:bg-[#19a7ce2f] {{ request()->segment(2) == 'jurusan' ? 'hover:bg-transparent' : '' }}">
                        <input type="checkbox" class="peer"
                            {{ request()->segment(2) == 'jurusan' ? 'checked' : '' }} />
                        <div
                            class="hover:bg-[#19a7ce2f] collapse-title p-3 w-full text-gray-900  flex flex-row items-center text-sm gap-1  py-0 fill-current {{ request()->segment(2) == 'jurusan' ? 'nav-active text-primary hover:bg-transparent' : '' }}">
                            <span class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="w-5 h-5 flex justify-center items-center">
                                    <path
                                        d="M0 96C0 43 43 0 96 0h96V190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5V0h32 32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32z" />
                                </svg>
                            </span>
                            <span
                                class="ml-2 text-sm font-semibold w-full flex items-center justify-between {{ request()->segment(2) == 'jurusan' ? 'nav-active bg-transparent hover:bg-transparent' : '' }} ">
                                Jurusan
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 h-3">
                                    <path
                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse-content text-sm">
                            <div class="sub-menu pt-2">
                                <ul
                                    class="list-none flex flex-col gap-1 ml-2 pl-2 text-gray-900 border-l border-gray-500 {{ request()->segment(2) == 'jurusan' ? 'border-primary' : '' }}">
                                    <li class="list-none">
                                        {{-- <a href="{{ route('jurusan.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ request()->segment(2) == 'jurusan' ? 'nav-active' : '' }}">Daftar
                                            Jurusan
                                        </a> --}}
                                        <a href="{{ route('jurusan.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'jurusan.index' || $route == 'jurusan.create' || $route == 'jurusan.edit' ? 'nav-active' : '' }}">Daftar
                                            Jurusan
                                        </a>
                                    </li>
                                    <li><a href="{{ route('jurusan.prestasi.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'jurusan.prestasi.index' || $route == 'jurusan.prestasi.create' || $route == 'jurusan.prestasi.edit' ? 'nav-active' : '' }}">Prestasi
                                            Jurusan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Ekstrakurikuler --}}
                <li>
                    <div
                        class="collapse fill-current transition-colors rounded hover:bg-[#19a7ce2f] {{ request()->segment(2) == 'ekstrakurikuler' ? 'hover:bg-transparent' : '' }}">
                        <input type="checkbox" class="peer"
                            {{ request()->segment(2) == 'ekstrakurikuler' ? 'checked' : '' }} />
                        <div
                            class="hover:bg-[#19a7ce2f] collapse-title p-3 w-full text-gray-900  flex flex-row items-center text-sm gap-1  py-0 fill-current {{ request()->segment(2) == 'ekstrakurikuler' ? 'nav-active text-primary hover:bg-transparent' : '' }}">
                            <span class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-5 h-5 flex justify-center items-center">
                                    <path
                                        d="M417.3 360.1l-71.6-4.8c-5.2-.3-10.3 1.1-14.5 4.2s-7.2 7.4-8.4 12.5l-17.6 69.6C289.5 445.8 273 448 256 448s-33.5-2.2-49.2-6.4L189.2 372c-1.3-5-4.3-9.4-8.4-12.5s-9.3-4.5-14.5-4.2l-71.6 4.8c-17.6-27.2-28.5-59.2-30.4-93.6L125 228.3c4.4-2.8 7.6-7 9.2-11.9s1.4-10.2-.5-15l-26.7-66.6C128 109.2 155.3 89 186.7 76.9l55.2 46c4 3.3 9 5.1 14.1 5.1s10.2-1.8 14.1-5.1l55.2-46c31.3 12.1 58.7 32.3 79.6 57.9l-26.7 66.6c-1.9 4.8-2.1 10.1-.5 15s4.9 9.1 9.2 11.9l60.7 38.2c-1.9 34.4-12.8 66.4-30.4 93.6zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm14.1-325.7c-8.4-6.1-19.8-6.1-28.2 0L194 221c-8.4 6.1-11.9 16.9-8.7 26.8l18.3 56.3c3.2 9.9 12.4 16.6 22.8 16.6h59.2c10.4 0 19.6-6.7 22.8-16.6l18.3-56.3c3.2-9.9-.3-20.7-8.7-26.8l-47.9-34.8z" />
                                </svg>
                            </span>
                            <span
                                class="ml-2 text-sm font-semibold w-full flex items-center justify-between {{ request()->segment(2) == 'ekstrakurikuler' ? 'nav-active bg-transparent hover:bg-transparent' : '' }} ">
                                Ekstrakurikuler
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 h-3">
                                    <path
                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse-content text-sm">
                            <div class="sub-menu pt-2">
                                <ul
                                    class="list-none flex flex-col gap-1 ml-2 pl-2 text-gray-900 border-l border-gray-500 {{ request()->segment(2) == 'ekstrakurikuler' ? 'border-primary' : '' }}">
                                    <li><a href="{{ route('ekstrakurikuler.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ekstrakurikuler.index' || $route == 'ekstrakurikuler.create' || $route == 'ekstrakurikuler.edit' ? 'nav-active' : '' }}">Daftar
                                            Ekstrakurikuler</a>
                                    </li>
                                    <li><a href="{{ route('ekstrakurikuler.prestasi.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ekstrakurikuler.prestasi.index' || $route == 'ekstrakurikuler.prestasi.create' || $route == 'ekstrakurikuler.prestasi.edit' ? 'nav-active' : '' }}">Prestasi
                                            Ekstrakurikuler</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- PPDB --}}
                <li>
                    <div
                        class="collapse fill-current transition-colors rounded hover:bg-[#19a7ce2f] {{ request()->segment(2) == 'ppdb' ? 'hover:bg-transparent' : '' }}">
                        <input type="checkbox" class="peer" {{ request()->segment(2) == 'ppdb' ? 'checked' : '' }} />
                        <div
                            class="hover:bg-[#19a7ce2f] collapse-title p-3 w-full text-gray-900  flex flex-row items-center text-sm gap-1  py-0 fill-current {{ request()->segment(2) == 'ppdb' ? 'nav-active text-primary hover:bg-transparent' : '' }}">
                            <span class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="w-5 h-5 flex justify-center items-center">
                                    <path
                                        d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
                                </svg>
                            </span>
                            <span
                                class="ml-2 text-sm font-semibold w-full flex items-center justify-between {{ request()->segment(2) == 'ppdb' ? 'nav-active bg-transparent hover:bg-transparent' : '' }} ">
                                PPDB
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 h-3">
                                    <path
                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse-content text-sm">
                            <div class="sub-menu pt-2">
                                <ul
                                    class="list-none flex flex-col gap-1 ml-2 pl-2 text-gray-900 border-l border-gray-500 {{ request()->segment(2) == 'ppdb' ? 'border-primary' : '' }}">
                                    <li><a href="{{ route('ppdb.tahun_ajaran.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ppdb.tahun_ajaran.index' || $route == 'ppdb.tahun_ajaran.create' || $route == 'ppdb.tahun_ajaran.edit' ? 'nav-active' : '' }}">Tahun
                                            Ajaran</a>
                                    </li>
                                    {{-- <li><a href="{{ route('ppdb.daftar.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ppdb.' || $route == 'ppdb.' || $route == 'ppdb.' ? 'nav-active' : '' }}">Daftar PPDB</a>
                                    </li> --}}
                                    <li><a href="{{ route('ppdb.daftar.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == $ppdb_daftar ? 'nav-active' : '' }}">Daftar
                                            PPDB</a>
                                    </li>
                                    <li><a href="{{ route('ppdb.pendaftar.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ppdb.pendaftar.index'  || $route == 'ppdb.pendaftar.edit' ? 'nav-active' : '' }}">Data
                                            Pendaftar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Post / Artikel --}}
                <li>
                    <div
                        class="collapse fill-current transition-colors rounded hover:bg-[#19a7ce2f] {{ request()->segment(2) == 'artikel' ? 'hover:bg-transparent' : '' }}">
                        <input type="checkbox" class="peer"
                            {{ request()->segment(2) == 'artikel' ? 'checked' : '' }} />
                        <div
                            class="hover:bg-[#19a7ce2f] collapse-title p-3 w-full text-gray-900  flex flex-row items-center text-sm gap-1  py-0 fill-current {{ request()->segment(2) == 'artikel' ? 'nav-active text-primary hover:bg-transparent' : '' }}">
                            <span class="pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 flex justify-center items-center"><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/></svg>
                            </span>
                            <span
                                class="ml-2 text-sm font-semibold w-full flex items-center justify-between {{ request()->segment(2) == 'artikel' ? 'nav-active bg-transparent hover:bg-transparent' : '' }} ">
                                Artikel
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 h-3">
                                    <path
                                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse-content text-sm">
                            <div class="sub-menu pt-2">
                                <ul
                                    class="list-none flex flex-col gap-1 ml-2 pl-2 text-gray-900 border-l border-gray-500 {{ request()->segment(2) == 'artikel' ? 'border-primary' : '' }}">
                                    {{-- <li><a href="{{ route('ppdb.daftar.index') }}"
                                        class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ppdb.' || $route == 'ppdb.' || $route == 'ppdb.' ? 'nav-active' : '' }}">Daftar PPDB</a>
                                </li> --}}
                                    <li><a href="{{ route('artikel.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == $artikel ? 'nav-active' : '' }}">Daftar Artikel</a>
                                    </li>
                                    <li><a href="{{ route('ppdb.pendaftar.index') }}"
                                            class="inline-block w-full px-4 py-2 text-sm rounded nav-item {{ $route == 'ppdb.pendaftar.index' || $route == 'ppdb.pendaftar.edit' ? 'nav-active' : '' }}">Data
                                            Pendaftar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                @if (auth()->user()->role_id == 1)
                    {{-- Admin --}}
                    <li class="">
                        <a href="#"
                            class="nav-item flex flex-row items-center gap-3 text-sm font-semibold px-4  py-4 rounded fill-current">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                class="w-5 h-5 flex items-center justify-center">
                                <path
                                    d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V454.8c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                            </svg>
                            Admin
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
