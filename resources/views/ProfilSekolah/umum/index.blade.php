@extends('layouts.app', ['title' => 'Informasi Umum'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Informasi Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Informasi Umum</h1>
                </div>
                {{-- <div class="mt-3">
                <h5 class=" text-md laptop:text-lg text-white">Selayang Pandang sekolah</h5>
            </div> --}}
            </div>

            <div class="card bg-white p-8 my-5">
                @include('ProfilSekolah.umum.layouts.tabs')
                <x-alert />
                <form action="{{ route('sekolah.umum.put') }}" method="POST">
                    @csrf
                    <div class="py-4 flex flex-row items-center justify-between">
                        <h1 class="text-xl font-bold mt-2">Profil</h1>
                    </div>
                    <div class="divider my-0 h-0 mb-4"></div>
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
        </div>
    </div>
@endsection
