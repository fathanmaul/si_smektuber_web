@extends('admin.layouts.new.app', ['title' => 'Ekstrakurikuler'])

@section('content')
<div class="flex w-full justify-center">
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Tambah Kategori Post
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Post / <a href="{{ route('jurusan.index') }}" class="hover:underline">Daftar Jurusan</a> / Tambah
                Jurusan
            </h3>
        </div>
    </div>
</div>
@endsection
