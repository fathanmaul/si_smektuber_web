<div class="sidebar min-h-screen bg-white w-[300px] transition-all ease-in-out duration-300 fixed mt-20 laptop:mt-0">
    <div class="flex flex-col w-full">
        <div class="flex flex-row justify-center py-8 items-center gap-4">
            <div>
                <img src="{{ asset('assets/favicon/smk-logo.png') }}" alt="logo" class="w-14">
            </div>
            <div class="pt-2">
                <h1 class="font-bold text-md">SMK Negeri 7</h1>
                <h1 class="font-bold text-md">Jember</h1>
            </div>
            <div id="closeSidebar" class="laptop:hidden ml-8">
                <i class="fa-solid fa-xmark text-xl"></i>
            </div>
        </div>
        <div class="">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li class="mt-[0.2rem]">
                        <a href="{{ url('dashboard') }}"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->is('dashboard') ? 'sidebar-item-active' : '' }}">
                            <i class="fa fa-solid fa-gauge"></i>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="{{ url('/sekolah') }}"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(1) == 'sekolah' ? 'sidebar-item-active' : '' }}">
                            <i class="fa fa-solid fa-school-flag"></i>
                            <span class="ml-4">Profil Sekolah</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="{{ url('/jurusan') }}"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white {{ request()->segment(1) == 'jurusan' ? 'sidebar-item-active' : '' }}">
                            <i class="fa fa-solid fa-book"></i>
                            <span class="ml-4">Jurusan</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="#"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                            <i class="fa fa-solid fa-futbol"></i>
                            <span class="ml-4">Ekstrakurikuler</span>
                        </a>
                    </li>
                    
                    <li class="mt-[0.2rem]">
                        <button class="flex w-full items-center py-4 px-5 text-[1rem] rounded-lg duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <div class="flex flex-row justify-between w-full">
                                <div class="">
                                    <i class="fa fa-solid fa-pen-to-square"></i>
                                    <span class="ml-3.5">PPDB</span>
                                </div>
                                <div class="">
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                </div>
                            </div>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Item 1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">item 2</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Item 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="#"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-slate-700 duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                            <i class="fa fa-regular fa-newspaper"></i>
                            {{-- <i class="fa fa-solid fa-house"></i> --}}
                            <span class="ml-4">Artikel</span>
                        </a>
                    </li>
                    <li class="mt-[0.2rem]">
                        <a href="#"
                            class="flex items-center py-4 px-5 text-[1rem] rounded-lg text-slate-700 duration-200 ease-in-out transition-all hover:bg-[#19A7CE] hover:text-white">
                            <i class="fa fa-brands fa-creative-commons-share"></i>
                            <span class="ml-4">Lowongan Kerja</span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- <ul class="flex flex-col mx-4 mt-2">
                <li class="mt-[0.2rem]">
                    <a href="#"
                        class="flex items-center py-4 px-6 gap-4 bg-slate-700 rounded-xl text-white mt-[0.2rem]">
                        <i class="fa-solid fa-gauge text-lg"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mt-[0.2rem]">
                    <a href="#"
                        class="flex items-center py-4 px-6 gap-4 rounded-xl text-slate-700 mt-[0.2rem] hover:bg-slate-700 hover:text-white duration-300 ease-in-out transition-all">
                        <i class="fa-solid fa-school text-md"></i>
                        <span>Profil Sekolah</span>
                    </a>
                </li>
                <li class="mt-[0.2rem]">
                    <a href="#"
                        class="flex items-center py-4 px-6 gap-4 rounded-xl text-slate-700 mt-[0.2rem] hover:bg-slate-700 hover:text-white duration-300 ease-in-out transition-all">
                        <i class="fa-solid fa-box-archive text-lg"></i>
                        <span>Data Master</span>
                    </a>

                </li>
            </ul> --}}
        </div>


    </div>
</div>