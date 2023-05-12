@extends('layouts.app', ['title' => 'Tambah Jurusan'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                <span><a href="{{ route('jurusan.index') }}" class="hover:underline">Jurusan</a></span>
                / Tambah Jurusan
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Tambah Jurusan</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Masukkan data jurusan yang sudah disediakan</h5>
                </div>
            </div>
            <div class="card my-4 bg-white p-5">
                <div class="form-control mb-4">
                    <label for="name" class="label">Nama Jurusan</label>
                    <input type="text" name="name" id="name"
                        class="input input-bordered w-full laptop:w-1/2
                        @error('name')
                            input-error
                        @enderror
                        "
                        placeholder="Masukkan Nama Prestasi" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-control">

                </div>
            </div>
        </div>
    </div>
@endsection
