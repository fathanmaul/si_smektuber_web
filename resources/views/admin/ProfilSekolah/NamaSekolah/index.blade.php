@extends('admin.layouts.app', ['title' => 'Nama Sekolah'])

@section('content')
    {{-- <div class="flex flex-row justify-between items-center">
        <div class="flex flex-col">
            <h1 class="text-gray-100 text-sm mb-4"><span><a href="{{ url('sekolah') }}"
                        class="hover:underline underline-offset-1">Profil Sekolah</a></span> <span class="text-gray-200"> /
                    Nama</span></h1>
            <h1 class="text-3xl font-bold text-white">Nama Sekolah</h1>
            <h4 class="mt-2 text-white">Mengubah Nama Sekolah</h4>
        </div>
    </div> --}}

    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                <span><a href={{ url('sekolah') }} class="hover:underline underline-offset-1">Profil Sekolah</a></span> / Nama Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Nama Sekolah</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
