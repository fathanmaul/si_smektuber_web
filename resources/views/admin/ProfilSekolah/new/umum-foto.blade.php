@extends('admin.layouts.new.app', ['title' => 'Foto Sekolah'])

@section('content')
<div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
    <div class="flex-1">
        <h1 class="text-xl lg:text-3xl font-bold text-white">
            Foto Sekolah
        </h1>
    </div>
    <div class="flex-1">
        <h3 class="text-sm lg:text-md font-normal text-white">
            Informasi Sekolah / Foto Sekolah
        </h3>
    </div>
    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        @include('admin.ProfilSekolah.umum.layouts.tabs')
    </div>
</div>
@endsection
