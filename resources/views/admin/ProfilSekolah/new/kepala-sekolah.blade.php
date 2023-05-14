@extends('admin.layouts.new.app', ['title' => 'Kepala Sekolah'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Kepala Sekolah
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Informasi Sekolah / Kepala Sekolah
            </h3>
        </div>
    </div>

    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        <x-alert />
        <h2 class="font-bold text-lg">Informasi Kepala Sekolah</h2>
        <div class="divider my-0 h-0 mb-4 mt-4"></div>
        <form action="{{ route('sekolah.kepala-sekolah.put') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
                <label for="#" class="appearance-none">Nama Kepala Sekolah</label>
                <div class="flex relative w-full items-center mt-3">
                    <span class="absolute left-4">
                        <i class="fa-solid fa-address-card"></i>
                    </span>
                    <input type="text"
                        class="input input-bordered @error('school_headmaster_name')
                        input-error
                    @enderror w-full laptop:w-3/5 pl-11 dark:bg-white"
                        placeholder="Nama Kepala Sekolah" name="school_headmaster_name"
                        @if (old('school_headmaster_name')) value="{{ old('school_headmaster_name') }}"
                        @else
                        value="{{ $kepala_sekolah->school_headmaster_name }}" @endif>
                </div>
                @error('school_headmaster_name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-control gap-2 mt-4">
                <label for="" class="appearance-none">Kutipan / Sambutan Kepala Sekolah</label>
                <div class="flex relative w-full laptop:w-3/5 items-center">
                    <span class="absolute left-4 top-4">
                        <i class="fa-solid fa-quote-left"></i>
                    </span>
                    <textarea
                        class="textarea textarea-bordered @error('school_headmaster_quote')
                        textarea-error
                    @enderror w-full pt-2 pl-11 text-[1rem]"
                        name="school_headmaster_quote" placeholder="Alamat Sekolah">{{ old('school_headmaster_quote') ? old('school_headmaster_quote') : $kepala_sekolah->school_headmaster_quote }}</textarea>
                </div>
                @error('school_headmaster_quote')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-control mt-4 gap-2">
                <label for="" class="appearance-none">Foto Kepala Sekolah {!! $kepala_sekolah->school_headmaster_picture != null
                    ? '&nbsp; &nbsp; <a href="' .
                        asset('storage/' . $kepala_sekolah->school_headmaster_picture) .
                        '" class="hover:underline text-sm" target="_blank">Lihat Foto <span><i class="fa-solid fa-window-restore text-xs"></i></span></a>'
                    : '' !!}
                </label>
                <input type="file"
                    class="file-input file-input-bordered @error('school_headmaster_picture') file-input-error @enderror w-full laptop:w-3/5"
                    accept="image/png, image/jpg, image/jpeg" name="school_headmaster_picture" />
                <label class="label">
                    <span class="label-text-alt">Ukuran foto maksimal 1MB | Format yang dibolehkan : jpg, jpeg, png</span>
                </label>
                @error('school_headmaster_picture')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end w-full mt-8">
                <button class="btn w-full laptop:w-auto flex flex-row gap-2 items-center" type="submit">
                    <span><i class="fa-solid fa-floppy-disk"></i></span>
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
@endsection
