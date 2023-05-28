@extends('admin.layouts.new.app', ['title' => 'Ubah Jurusan'])

@section('content')
    <div class="flex w-full justify-center">
        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Ubah Tahun Ajaran
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    PPDB / <a href="{{ route('ppdb.tahun_ajaran.index') }}" class="hover:underline">Tahun Ajaran</a> / Ubah
                    Tahun Ajaran
                </h3>
            </div>
        </div>

    </div>
    <div class="flex justify-center w-full mb-10">
        <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 w-full lg:w-3/5 ">
            {{-- <h2 class="text-sm lg:text-base font-bold lg:text-center">Masukkan data Tahun Ajaran yang baru
            </h2> --}}
            {{-- <div class="divider mt-0"></div> --}}
            <form action="{{ route('ppdb.tahun_ajaran.put', $schoolYear->id) }}" method="post">
                @csrf
                <div class="form-control gap-2 mb-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Masukkan Tahun Ajaran yang akan diubah</label>
                    <input type="text"
                        class="input input-bordered @error('school_year')
                        input-error
                    @enderror w-full"
                        name="school_year" placeholder="Tahun Ajaran"
                        @if (old('school_year')) value="{{ old('school_year') }}"
                    @else 
                        value="{{ $schoolYear->school_year }}"
                    @endif>
                    @error('school_year')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col-reverse lg:flex-row items-center justify-end w-full gap-4 lg:gap-3">
                    <a href="{{ route('ppdb.tahun_ajaran.index') }}"
                        class="btn btn-outline btn-error w-full lg:w-fit">BATAL</a>
                    <button type="submit" class="btn w-full lg:w-fit">SIMPAN</button>
                </div>

            </form>
        </div>
    </div>
@endsection
