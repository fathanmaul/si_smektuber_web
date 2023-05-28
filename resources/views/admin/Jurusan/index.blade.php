@extends('admin.layouts.app', ['title' => 'Jurusan'])


@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Jurusan
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Jurusan</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Daftar jurusan yang tersedia</h5>
                </div>
            </div>
            {{-- <div class="card bg-white w-full p-8 mt-4">
                <div class="flex flex-row items-center w-full mb-6">
                    <button class="btn flex flex-row items-center gap-2 justify-center w-full laptop:w-auto"><span><i
                                class="fa-solid fa-plus"></i></span>Tambah</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="w-8">No</th>
                                <th>Nama Jurusan</th>
                                <th class="w-1/6 text-center">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $id = 1;
                            @endphp
                            @foreach ($jurusans as $major)
                            <tr>
                                <th>{{ $id }}</th>
                                <td>{{ $major->name }}</td>
                                <td class="w-full flex flex-row gap-3 justify-center">
                                    <a href="{{ url("/Jurusan/".$major->id) }}" class="btn"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                    <a href="" class="btn btn-error text-white"><span><i class="fa-solid fa-trash"></i></span></a>
                                </td>
                            </tr>
                            @php
                                $id++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}

            <div class="card bg-white p-5 my-4">
                {{-- @if (session('flash'))
                    @component('components.alert')
                        @slot('type')
                            {{ session('flash')['type'] }}
                        @endslot

                        @slot('message')
                            {{ session('flash')['message'] }}
                        @endslot
                    @endcomponent
                @endif --}}
                <x-alert />
                <div class="w-full flex flex-row items-center gap-4 mb-4 @if (session('flash')) mt-6 @endif">
                    <div class="flex relative w-full items-center">
                        <span class="absolute left-4"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text"
                            class="w-full h-[40px] py-[1.40rem] pl-10 border-2 rounded-lg outline-none  text-slate-800 transition-all ease-in-out duration-300 hover:shadow-lg focus:shadow-lg"
                            placeholder="Cari Jurusan">
                    </div>
                    
                    {{-- <input type="text" id="input-search"
                        class="input border-slate-500 font-thin decoration-inherit w-full" placeholder="Cari Prestasi"> --}}
                    <button class="btn flex flex-row items-center gap-2">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span class="hidden laptop:block">Cari</span>
                    </button>

                </div>
                <div class="flex flex-row items-center w-full 
                 mb-6">
                    <a href="{{ route('jurusan.create') }}"
                        class="btn btn-success text-white flex flex-row items-center gap-2 justify-center w-full laptop:w-auto"><span><i
                                class="fa-solid fa-plus"></i></span>Tambah</a>
                </div>
                {{-- <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class=""></th>
                                <th class="w-[300px]">Nama Prstasi</th>
                                <th class="w-1/6 text-center">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="overflow-hidden text-ellipsis w-[300px]">1st Place Mukbang Video Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ea ab ad quibusdam, ducimus autem enim optio eum quae quia perspiciatis dolorum vero officiis, sequi, incidunt laudantium est suscipit quasi!</td>
                                <td class="w-full flex flex-row gap-3 justify-center">
                                    <a href="#" class="btn"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                    <a href="" class="btn btn-error text-white"><span><i class="fa-solid fa-trash"></i></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}


                <div class="overflow-x-auto">
                    <table class="table w-full mb-4">
                        <thead>
                            <tr>
                                <th class="">No</th>
                                <th class="w-[75%]">Nama Jurusan</th>
                                <th class="w-[20%] text-center ">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusans as $key => $jurusan)
                                <tr>
                                    <th class="border px-4 py-2">{{ $jurusans->firstItem() + $key }}</th>
                                    <td class="border px-4 py-2 max-w-xs overflow-hidden text-ellipsis">
                                        {{ $jurusan->name }}</td>
                                    <td class="w-full flex flex-row gap-3 justify-center">
                                        {{-- <div class="tooltip" data-tip="Lihat Foto">
                                            <a target="_blank"
                                                href="
                                            @if ($achievements->photo != null) {{ getAsset('storage/' . $achievements->photo) }}
                                            @else
                                            https://www.google.com @endif
                                            "
                                                class="btn btn-sm btn-success text-white"><i
                                                    class="fa-solid fa-image"></i></a>
                                        </div> --}}
                                        <div class="tooltip" data-tip="Edit Prestasi">
                                            <a href="{{ route('prestasi.edit', [$jurusan->id]) }}"
                                                class="btn btn-sm"><span><i
                                                        class="fa-solid fa-pen-to-square"></i></span></a>
                                        </div>
                                        <div class="tooltip" data-tip="Hapus Prestasi">
                                            <a href="{{ route('prestasi.destroy', $jurusan->id) }}"
                                                onclick="deleteModal(event, this)" class="btn btn-sm btn-error text-white"
                                                data-nama="{{ $jurusan->title }}"><span><i
                                                        class="fa-solid fa-trash"></i></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $jurusans->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ getAsset('js/jurusan/main.js') }}"></script>
@endsection
