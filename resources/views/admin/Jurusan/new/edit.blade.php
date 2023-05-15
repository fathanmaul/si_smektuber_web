@extends('admin.layouts.new.app', ['title' => 'Edit Jurusan'])

@section('content')
    <div class="flex w-full justify-center">

        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Ubah / Edit Jurusan
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Jurusan / <a href="{{ route('jurusan.index') }}" class="hover:underline">Daftar Jurusan</a> / Ubah
                    Jurusan
                </h3>
            </div>
        </div>
    </div>
    <div class="flex justify-center w-full mb-10">


        <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
            <h2 class="text-sm lg:text-base font-bold lg:text-center">Masukkan data mengenai Jurusan yang akan ditambahkan!
            </h2>

            <form action="{{ route('jurusan.put', $jurusan->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Nama Jurusan</label>
                    <input type="text" name="major_name" id=""
                        class="input @error('major_name')
                    input-error
                @enderror border-gray-400 rounded"
                        placeholder="Masukkan Nama Jurusan"
                        @if (old('major_name')) value="{{ old('major_name') }}"
                        @else
                        value="{{ $jurusan->major_name }}" @endif />
                    @error('major_name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Deskripsi Jurusan &nbsp; (Maksimal
                        1000 karakter)</label>
                    <x-editor.ckeditor name="major_description" id="major_description" class="ck-content">
                        @if (old('major_description'))
                            {{ old('major_description') }}
                        @else
                            {{ $jurusan->major_description }}
                        @endif
                    </x-editor.ckeditor>
                    @error('major_description')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    @if ($jurusan->major_logo)
                        <p class="text-sm">Logo sebelumnya : </p>
                        <div class="w-64">
                            <img src="{{ asset('storage/' . $jurusan->major_logo) }}" alt="" />
                        </div>
                    @else
                        <p class="text-sm text-gray-500">Logo tidak tersedia!</p>
                    @endif
                    <label for="#" class="appearance-none text-sm lg:text-base">Logo Jurusan &nbsp; (Ukuran Maksimal:
                        1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('major_logo') input-error @enderror w-full border-gray-400 rounded"
                        name="major_logo" />
                    @error('major_logo')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    @if ($jurusan->picture_1)
                        <div class="w-64">
                            <p class="text-sm">Foto Jurusan 1 sebelumnya : </p>
                            <img src="{{ asset('storage/' . $jurusan->picture_1) }}" alt="" />
                        </div>
                    @else
                        <p class="text-sm text-gray-500">Foto tidak tersedia!</p>
                    @endif
                    <label for="#" class="appearance-none text-sm lg:text-base">Foto Jurusan 1 &nbsp; (Ukuran
                        Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('picture_1') input-error @enderror w-full border-gray-400 rounded"
                        name="picture_1" />
                    @error('picture_1')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    @if ($jurusan->picture_2)
                        <p class="text-sm">Foto Jurusan 2 sebelumnya : </p>
                        <div class="w-64">
                            <img src="{{ asset('storage/' . $jurusan->picture_2) }}" alt="" />
                        </div>
                    @else
                        <p class="text-sm text-gray-500">Foto tidak tersedia!</p>
                    @endif
                    <label for="#" class="appearance-none text-sm lg:text-base">Foto Jurusan 2 &nbsp; (Ukuran
                        Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('picture_2') input-error @enderror w-full border-gray-400 rounded"
                        name="picture_2" />
                    @error('picture_2')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col-reverse gap-3 lg:flex-row items-center justify-end mt-8">
                    <a href="{{ route('jurusan.index') }}"
                        class="btn btn-error btn-outline  hover:text-white flex items-center gap-2 w-full lg:w-fit"
                        type="submit">
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
