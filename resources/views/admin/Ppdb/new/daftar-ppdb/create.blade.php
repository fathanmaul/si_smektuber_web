@extends('admin.layouts.new.app', ['title' => 'Daftar PPDB'])

@section('content')
<div class="flex w-full justify-center">

    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Tambah Informasi PPDB
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / <a href="{{ route('ppdb.daftar.index') }}" class="hover:underline">Daftar PPDB</a> / Tambah
                PPDB
            </h3>
        </div>
    </div>
</div>
{{-- <div class="flex justify-center w-full mb-10"> --}}
<div class="flex justify-center w-full mb-10">
    <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
        <h2 class="text-sm lg:text-base font-bold lg:text-center">Masukkan data mengenai Informasi PPDB yang akan ditambahkan!
        </h2>
        <div class="divider"></div>
        <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="flex flex-col gap-2">
                <label for="#" class="appearance-none text-sm lg:text-base">Nama Jurusan</label>
                <input type="text" name="major_name" id=""
                    class="input @error('major_name')
                input-error
            @enderror border-gray-400 rounded"
                    placeholder="Masukkan Nama Jurusan" value="{{ old('major_name') }}" />
                    @error('major_name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div> --}}
            <div class="flex flex-col gap-2 mt-4">
            <label for="#" class="appearance-none text-sm lg:text-base">Tahun Ajaran </label>
            <select class="select select-info border max-w-xs w-full rounded p-2">
                <option disabled selected>Pilih tahun ajaran</option>
                <option>2022/2023</option>
                <option>2024/2025</option>
                <option>2026/2027</option>
            </select>
            </div>
            <div class="flex flex-col gap-2 mt-4">
                <label for="#" class="appearance-none text-sm lg:text-base">Deskripsi PPDB &nbsp; (Maksimal 1000 Karakter)</label>
                <x-editor.ckeditor name="regristation_description" id="registration_description" class="ck-content">
                    @if (old('major_description'))
                        {{ old('major_description') }}
                    @endif
                </x-editor.ckeditor>
                @error('major_description')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 mt-6">
                <label for="#" class="appearance-none text-sm lg:text-base">Poster Informasi PPDB &nbsp; (Ukuran Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                <input type="file"
                    class="file-input file-input-bordered @error('major_logo') input-error @enderror w-full border-gray-400 rounded"
                    name="major_logo" />
                @error('major_logo')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2 mt-4">
                <label for="#" class="appearance-none text-sm lg:text-base">PPDB dimulai</label>
                <input type="date" name="ppdb_start" id="ppdb_start"
                    class="input @error('ppdb_start')
                        input-error
                    @enderror border-gray-400 rounded"
                    placeholder="Masukkan tanggal dimulainya PPDB" value="{{ old('ppdb_start') }}" />
                @error('ppdb_start')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex flex-col gap-2 mt-4">
                <label for="#" class="appearance-none text-sm lg:text-base">PPDB berakhir</label>
                <input type="date" name="ppdb_end" id="ppdb_end"
                    class="input @error('ppdb_end')
                        input-error
                    @enderror border-gray-400 rounded"
                    placeholder="Masukkan tanggal berakhirnya PPDB" value="{{ old('ppdb_end') }}" />
                @error('ppdb_end')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            {{-- <div class="flex flex-col gap-2 mt-6">
                <label for="#" class="appearance-none text-sm lg:text-base">Foto Jurusan 2 &nbsp; (Ukuran Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                <input type="file"
                    class="file-input file-input-bordered @error('picture_2') input-error @enderror w-full border-gray-400 rounded"
                    name="picture_2" />
                @error('picture_2')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div> --}}
            <div class="flex flex-col-reverse gap-3 lg:flex-row items-center justify-end mt-8">
                <a href="{{ route('ppdb.daftar.index') }}" class="btn btn-error btn-outline  hover:text-white flex items-center gap-2 w-full lg:w-fit" type="submit">
                    <span>
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </span>
                    KEMBALI
                </a>
                <button class="btn text-white flex items-center gap-2 w-full lg:w-fit" type="submit">
                    <span>
                        <i class="fa-solid fa-floppy-disk"></i>
                    </span>
                    SIMPAN
                </button>
            </div>
        </form>

        
    </div>
</div>

@endsection