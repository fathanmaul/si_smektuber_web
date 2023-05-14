@extends('admin.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                <h1>Dashboard</h1>
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Halo, John Doe</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Selamat Datang di Admin SMK Negeri 7
                        Jember</h5>
                </div>
            </div>
            <div class="mt-9 grid grid-cols-1 gap-8 tablet:grid-cols-2 laptop:grid-cols-3 mb-8">
                <div class="h-40 w-full bg-white rounded-xl drop-shadow-lg"></div>
                <div class="h-40 w-full bg-white rounded-xl drop-shadow-lg"></div>
                <div class="h-40 w-full bg-white rounded-xl drop-shadow-lg"></div>
            </div>
            {{-- <div class="card w-full bg-white shadow-xl mt-8">
                <div class="card-body">
                    <h2 class="card-title">Artikel Terbaru</h2>
                    <div class="card w-full bg-white border mt-8">
                        <div class="card-body flex flex-row gap-8">
                            

                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="bg-emerald-300 w-[350px] p-[3rem] h-[250px] ">
                <img src="https://i.pinimg.com/564x/c0/8f/5c/c08f5c1f9d48c088f0fe6aa2fbc2b007.jpg" class="w-full h-full object-cover" alt="">
            </div> --}}


            {{-- <div class="card w-full bg-white drop-shadow-xl mt-8 p-8"> --}}
            {{-- <h1 class="text-xl">Artikel Terbaru</h1>
                <div class="card w-full border border-slate-200 my-4 p-5">
                    <div class="flex flex-col laptop:flex-row h-full">
                        <div class="h-full w-full laptop:w-[350px]">
                            <div class="w-full h-[200px]">
                                <img src="https://i.pinimg.com/564x/c0/8f/5c/c08f5c1f9d48c088f0fe6aa2fbc2b007.jpg" class="w-full h-full object-cover rounded-xl" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card w-full border border-slate-200 my-4 p-5">
                    <div class="flex flex-col laptop:flex-row h-full">
                        <div class="h-full w-full laptop:w-[350px]">
                            <div class="w-full h-[200px]">
                                <img src="https://i.pinimg.com/564x/7d/0a/e5/7d0ae57df8ad52b7f24de2e46f089966.jpg" class="w-full h-full object-cover rounded-xl" alt="">
                            </div>
                        </div>

                    </div>
                </div> --}}
            {{-- </div> --}}


            <h1 class="font-bold text-2xl">Artikel / Berita Terbaru</h1>


            {{-- <div
                class="card w-full bg-white drop-shadow-lg flex flex-col mb-4 p-6
            tablet:flex-row tablet:gap-8
            ">
                <img src="https://i.pinimg.com/564x/4c/50/44/4c5044979bc75ba4f4198737d2d5a89f.jpg" alt=""
                    class="rounded-lg w-full h-full tablet:h-[200px] tablet:w-[350px] tablet:object-cover tablet:object-center">

                <div class="details flex flex-col mt-4 tablet:mt-0">
                    <h1 class="text-xl font-bold">Judul Artikel</h1>
                    <p class="flex flex-row items-center">
                        <span>
                            <i class="fa-solid fa-calendar-days text-slate-600 mr-2 text-sm"></i>
                        </span>
                        24 Januari 2023
                    </p>
                    <p class="mt-4 tablet:mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Quisquam
                        quod, quia, voluptate, voluptates quae quas voluptatibus quibusdam quidem
                        voluptatum
                        quos. Quisquam quod, quia, voluptate, voluptates quae quas voluptatibus quibusdam
                        quidem voluptatum quos.</p>
                </div>
            </div> --}}

            <div
                class="card w-full h-[450px] p-6 bg-white tablet:h-[230px] drop-shadow-lg flex flex-col tablet:flex-row gap-5 tablet:gap-8 my-4">
                <div class="h-[200px] w-full rounded-xl tablet:h-full tablet:w-[450px]">
                    <img src="https://i.pinimg.com/564x/c1/45/d1/c145d1b786d6bbb335cc36ba111cd20c.jpg" alt=""
                        class="w-full h-full object-cover object-center rounded-xl">
                </div>
                <div class="h-full w-full flex flex-col">
                    <h3 class="text-xl font-bold">Judul Artikel</h3>
                    <p class="flex flex-row items-center">
                        <span>
                            <i class="fa-solid fa-calendar-days text-slate-600 mr-2 text-sm"></i>
                        </span>
                        24 Januari 2023
                    </p>
                    <p class="mt-4 inline-block h-[80px] overflow-hidden text-ellipsis">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eius fuga porro ea maiores voluptate
                        iusto modi praesentium necessitatibus suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Accusantium, doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos,
                        esse! Lorem ipsum dolor membingungkan apa yang harus saya tulis disini.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-500 duration-300 transition-all">Baca
                        Selengkapnya &gt;&gt;</a>
                </div>
            </div>
            <div
                class="card w-full h-[450px] my-4 p-6 bg-white tablet:h-[230px] drop-shadow-lg flex flex-col tablet:flex-row gap-5 tablet:gap-8">
                <div class="h-[200px] w-full rounded-xl tablet:h-full tablet:w-[450px]">
                    <img src="https://i.pinimg.com/564x/ec/5d/f1/ec5df1b1afeccd57ffd73f4a4499502f.jpg" alt=""
                        class="w-full h-full object-cover object-center rounded-xl">
                </div>
                <div class="h-full w-full flex flex-col">
                    <h3 class="text-xl font-bold">Judul Artikel</h3>
                    <p class="flex flex-row items-center">
                        <span>
                            <i class="fa-solid fa-calendar-days text-slate-600 mr-2 text-sm"></i>
                        </span>
                        24 Januari 2023
                    </p>
                    <p class="mt-4 inline-block h-[80px] overflow-hidden text-ellipsis">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eius fuga porro ea maiores voluptate
                        iusto modi praesentium necessitatibus suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Accusantium, doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos,
                        esse! Lorem ipsum dolor membingungkan apa yang harus saya tulis disini.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-500 duration-300 transition-all">Baca
                        Selengkapnya &gt;&gt;</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        
    </script>
@endsection
