@extends('layouts.app', ['title' => 'Profil Sekolah'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Profil Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Profil Sekolah</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Informasi mengenai identitas sekolah</h5>
                </div>
            </div>

            <div class="my-4 card bg-white w-full h-screen">

            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
