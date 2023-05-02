@extends('layouts.app', ['title' => 'Jurusan'])


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
            <div class="card bg-white w-full p-8 mt-4">
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
                            <!-- row 1 -->
                            <!-- row 2 -->
                            {{-- <tr>
                                <th>2</th>
                                <td>Teknik Kendaraan Ringan</td>
                                <td class="w-full flex flex-row gap-3 justify-center">
                                    <button class="btn"><span><i class="fa-solid fa-pen-to-square"></i></span></button>
                                    <button class="btn btn-error text-white"><span><i class="fa-solid fa-trash"></i></span></button>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/jurusan/main.js') }}"></script>
@endsection
