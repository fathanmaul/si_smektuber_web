@extends('layouts.app', ['title' => 'Kepala Sekolah'])


@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Profil Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Kepala Sekolah</h1>
                </div>
            </div>

            <div class="card bg-white p-8 my-5">
                <x-alert />
                <form action="{{ route('sekolah.kepala-sekolah.put') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <label for="#" class="appearance-none">Nama Kepala Sekolah</label>
                        <div class="flex relative w-full items-center mt-3">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-clipboard-user"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_headmaster_name')
                                input-error
                            @enderror w-full laptop:w-2/5 pl-11 dark:bg-white"
                                placeholder="Kepala Sekolah" name="school_headmaster_name"
                                value="{{ old('school_headmaster_name') }}">
                        </div>
                        @error('school_headmaster_name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-control mt-4">
                        <label for="#" class="appearance-none">Kutipan Kepala Sekolah</label>
                        <div class="flex relative w-full items-center mt-3">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-quote-left"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_headmaster_quote')
                            input-error
                        @enderror w-full laptop:w-2/5 pl-11 dark:bg-white"
                                placeholder="Kutipan Kepala Sekolah" name="school_headmaster_quote"
                                value="{{ old('school_headmaster_quote') }}">
                        </div>
                        @error('school_headmaster_quote')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-control mt-4">
                        <label for="#" class="appearance-none mb-4">Upload Foto Kepala Sekolah</label>
                        <input type="file" class="file-input @error('school_headmaster_photo')
                        file-input-error
                    @enderror file-input-bordered w-full laptop:w-2/5"
                            name="school_headmaster_photo" />
                        @error('school_headmaster_photo')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-row justify-end items-center mt-5">
                        <button class="btn flex items-center gap-2" type="submit" id="submit-button">
                            <span>
                                <i class="fa-solid fa-floppy-disk"></i>
                            </span>
                            SIMPAN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
