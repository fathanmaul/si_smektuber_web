@extends('admin.layouts.new.app', ['title' => 'Ekstrakurikuler'])

@section('content')
    <div class="flex w-full justify-center">

        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Tambah Ekstrakurikuler
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Ekstrakurikuler / <a href="{{ route('ekstrakurikuler.index') }}" class="hover:underline">Daftar Ekstrakurikuler</a> / Tambah
                    Ekstrakurikuler
                </h3>
            </div>
        </div>
    </div>

    <div class="flex justify-center w-full mb-10">
        <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
            <h2 class="text-sm lg:text-base font-bold lg:text-center">Masukkan data mengenai Ekstrakurikuler yang akan ditambahkan!
            </h2>

            <form action="{{ route('ekstrakurikuler.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Nama Ekstrakurikuler</label>
                    <input type="text" name="extracurricular_name" id=""
                        class="input @error('extracurricular_name')
                    input-error
                @enderror border-gray-400 rounded"
                        placeholder="Masukkan Nama Ekstrakurikuler" value="{{ old('extracurricular_name') }}" />
                        @error('extracurricular_name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Deskripsi Ekstrakurikuler &nbsp; (Maksimal
                        1000 karakter)</label>
                    <x-editor.ckeditor name="extracurricular_description" id="extracurricular_description" class="ck-content">
                        @if (old('extracurricular_description'))
                            {{ old('extracurricular_description') }}
                        @endif
                    </x-editor.ckeditor>
                    @error('extracurricular_description')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Logo Ekstrakurikuler &nbsp; (Ukuran Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('extracurricular_logo') input-error @enderror w-full border-gray-400 rounded"
                        name="extracurricular_logo" />
                    @error('extracurricular_logo')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Foto Ekstrakurikuler 1 &nbsp; (Ukuran Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('picture_1') input-error @enderror w-full border-gray-400 rounded"
                        name="picture_1" />
                    @error('picture_1')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Foto Ekstrakurikuler 2 &nbsp; (Ukuran Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('picture_2') input-error @enderror w-full border-gray-400 rounded"
                        name="picture_2" />
                    @error('picture_2')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col-reverse gap-3 lg:flex-row items-center justify-end mt-8">
                    <a href="{{ route('jurusan.index') }}" class="btn btn-error btn-outline  hover:text-white flex items-center gap-2 w-full lg:w-fit" type="submit">
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
