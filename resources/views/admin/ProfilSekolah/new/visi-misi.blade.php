@extends('admin.layouts.new.app', ['title' => 'Visi Misi'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2 ">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Visi dan Misi
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Informasi Sekolah / Visi dan Misi
            </h3>
        </div>
    </div>

    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        <x-alert />

        <form action="{{ route('sekolah.visi-misi.put') }}" method="POST">
            @csrf
            <h2 class="font-bold text-lg">Visi</h2>
            <div class="divider my-0 mb-3"></div>

            <div class="form-control">
                <label for="#" class="appearance-none">Masukkan Visi Sekolah</label>
                <div class="flex relative w-full items-center mt-3">
                    <span class="absolute left-4">
                        <i class="fa-solid fa-bullseye"></i>
                    </span>
                    <input type="text"
                        class="input input-bordered @error('school_vision')
                        input-error
                    @enderror w-full laptop:w-3/5 pl-11 dark:bg-white"
                        placeholder="Visi Sekolah" name="school_vision"
                        @if (old('school_vision')) value="{{ old('school_vision') }}"
                        @else
                        value="{{ $visiMisi->school_vision }}" @endif>
                </div>
                @error('school_vision')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-3 flex flex-row items-center justify-between">
                <h2 class="font-bold text-lg">Misi</h2>
            </div>
            <div class="divider my-0 mt-3"></div>
            <div class="form-control mb-4 mt-3">
                <label for="#" class="appearance-none mb-3">Masukkan Misi Sekolah</label>
                {{-- <div class="flex relative w-full items-center mt-3">
                    <span class="absolute left-4">
                        <i class="fa-solid fa-bullseye"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full laptop:w-2/5 pl-11 dark:bg-white"
                        placeholder="Misi Sekolah" name="school_vision" value="">
                </div> --}}

                <x-editor.ckeditor name="school_mission" id="misi-sekolah" class="ck-content">
                    @if (old('school_mission'))
                        {{ old('school_mission') }}
                    @else
                        {{ $visiMisi->school_mission }}
                    @endif
                </x-editor.ckeditor>

                @error('school_mission')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-row items-center justify-end">
                <button class="btn text-white flex items-center gap-2">
                    <span>
                        <i class="fa-solid fa-floppy-disk"></i>
                    </span>
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
@endsection
