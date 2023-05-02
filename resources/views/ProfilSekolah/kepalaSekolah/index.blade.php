@extends('layouts.app', ['title' => 'Kepala Sekolah'])


@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Profil Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Profil & Sejarah Sekolah</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
