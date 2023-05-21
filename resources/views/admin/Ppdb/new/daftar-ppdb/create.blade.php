@extends('admin.layouts.new.app', ['title' => 'Daftar PPDB'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Tambah PPDB
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / <a href="{{ route('ppdb.daftar.index') }}" class="hover:underline">Daftar PPDB</a> / Tambah
                PPDB
            </h3>
        </div>
    </div>
    {{-- <div class="flex justify-center w-full mb-10"> --}}
    <div class="flex justify-center w-full mb-10">
        <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 w-full">
            <h2 class="text-sm lg:text-base font-bold lg:text-center">Masukkan data mengenai Informasi PPDB yang akan
                ditambahkan!
            </h2>
            <div class="divider"></div>
            <form action="{{ route('ppdb.daftar.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Tahun Ajaran</label>
                    <select name="school_year" class="select select-bordered w-full rounded" required>
                        <option disabled selected value="null">Pilih tahun ajaran</option>
                        @foreach ($schoolYears as $year)
                            <option value="{{ $year->id }}">{{ $year->school_year }}</option>
                        @endforeach 
                    </select>
                    <p class="text-sm text-gray-700">Belum menambahkan tahun ajaran? Klik <a href="{{ route('ppdb.tahun_ajaran.create') }}" class="text-blue-500 hover:underline">disini</a></p>
                    @if ($schoolYears->count() == 0)
                        <p class="text-red-500 text-sm mt-2">Tidak ada tahun ajaran yang tersedia. Klik <span><a
                                    href="{{ route('ppdb.tahun_ajaran.create') }}"
                                    class="text-blue-700 hover:underline">disini</a></span> untuk menambahkan tahun ajaran
                            baru</p>
                    @endif
                    @error('school_year')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-4">
                    <label for="#" class="appearance-none text-sm lg:text-base">Deskripsi PPDB </label>
                    <x-editor.ckeditor_full name="description" id="description" class="ck-content">
                        @if (old('description'))
                            {{ old('description') }}
                        @endif
                    </x-editor.ckeditor_full>
                    @error('description')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mt-6">
                    <label for="#" class="appearance-none text-sm lg:text-base">Poster Informasi PPDB &nbsp; (Ukuran
                        Maksimal: 1MB | Format: jpg, jpeg, png)</label>
                    <input type="file"
                        class="file-input file-input-bordered @error('poster') input-error @enderror w-full border-gray-400 rounded"
                        name="poster" />
                    @error('poster')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 w-full lg:gap-4">
                    <div class="flex flex-col gap-2 mt-4">
                        <label for="#" class="appearance-none text-sm lg:text-base">PPDB dimulai &nbsp;<label for="my-modal-4" class="cursor-pointer"><i class="fa-solid fa-circle-question"></i></label></label>
                        <input type="date" name="date_start" id="date_start"
                            class="input @error('date_start')
                            input-error
                        @enderror border-gray-400 rounded"
                            placeholder="Masukkan tanggal dimulainya PPDB" value="{{ old('date_start') }}" />
                        @error('date_start')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <div class="flex flex-col gap-2 mt-4">
                        <label for="#" class="appearance-none text-sm lg:text-base">PPDB berakhir</label>
                        <input type="date" name="date_end" id="ppdb_end"
                            class="input @error('date_end')
                            input-error
                        @enderror border-gray-400 rounded"
                            placeholder="Masukkan tanggal berakhirnya PPDB" value="{{ old('date_end') }}" />
                        @error('date_end')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

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
                    <a href="{{ route('ppdb.daftar.index') }}"
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

    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
        <label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">PPDB Dimulai dan Berakhir</h3>
            <p class="py-4">Tanggal yang dimasukan ini digunakan untuk memberi batas waktu pengisian form pendaftaran pada Aplikasi Mobile.
            </p>
        </label>
    </label>
@endsection
