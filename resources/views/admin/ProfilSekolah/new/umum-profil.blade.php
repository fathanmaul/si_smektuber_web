@extends('admin.layouts.new.app', ['title' => 'Informasi Umum'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Informasi Umum
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Informasi Sekolah / Informasi Umum
            </h3>
        </div>
    </div>

    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        @include('admin.ProfilSekolah.umum.layouts.tabs')
        <x-alert />
        <h2 class="font-bold text-lg {{ (session()->has('flash') ? 'mt-0' : 'mt-4') }}">Profil</h2>
        <div class="divider my-0 h-0 mb-4 mt-4"></div>
        <form action="{{ route('sekolah.umum.put') }}" method="POST" class="mt-4">
            @csrf
            <div class="grid grid-cols-1 laptop:grid-cols-3 gap-4 w-full">
                <div class="w-full">
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Nama Sekolah</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-school"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_name')
                                input-error
                            @enderror w-full pl-11 dark:bg-white"
                                placeholder="Nama Sekolah" name="school_name" value="{{ $profil->school_name }}">
                        </div>
                        @error('school_name')
                            <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="w-full">
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Alamat Sekolah</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4 top-4">
                                <i class="fa-solid fa-map"></i>
                            </span>
                            <textarea
                                class="textarea textarea-bordered @error('school_address')
                                textarea-error
                            @enderror w-full pt-3 pl-11"
                                name="school_address" placeholder="Alamat Sekolah">{{ old('school_address') ? old('school_address') : $profil->school_address }}</textarea>
                        </div>
                        @error('school_address')
                            <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="w-full">
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Akreditasi</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-certificate"></i>
                            </span>
                            <select
                                class="select select-bordered @error('school_accreditation')
                                select-error
                            @enderror pl-11 w-full"
                                name="school_accreditation">
                                <option disabled selected>Pilih Akreditasi</option>
                                <option value="A" {{ $profil->school_accreditation == 'A' ? 'selected' : '' }}>
                                    A</option>
                                <option value="B" {{ $profil->school_accreditation == 'B' ? 'selected' : '' }}>
                                    B</option>
                                <option value="C" {{ $profil->school_accreditation == 'C' ? 'selected' : '' }}>
                                    C</option>
                                <option value="D" {{ $profil->school_accreditation == 'D' ? 'selected' : '' }}>
                                    D</option>
                                <option value="E" {{ $profil->school_accreditation == 'E' ? 'selected' : '' }}>
                                    E</option>
                            </select>
                        </div>
                        @error('school_accreditation')
                            <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Slogan Sekolah</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-fax"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_slogan')
                                input-error
                            @enderror w-full pl-11 dark:bg-white"
                                placeholder="ex. Tiada Hari Tanpa Prestasi" name="school_slogan"
                                value="{{ $profil->school_slogan }}">
                        </div>
                        @error('school_slogan')
                            <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="pb-4 flex flex-row items-center justify-between">
                <h1 class="text-xl font-bold mt-2">Deskripsi</h1>
            </div>
            <div class="divider my-0 h-0 mb-4"></div>
            <div class="form-control">
                <label for="" class="appearance-none mb-4">Sejarah Sekolah</label>
                <x-editor.ckeditor name="school_history" id="sejarah" class="ck-content">
                    {{ old('school_history') ? old('school_history') : $profil->school_history }}
                </x-editor.ckeditor>
                @error('school_history')
                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
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

@section('script')
    
@endsection
