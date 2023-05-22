@extends('admin.layouts.new.app', ['title' => 'Data Calon Pendaftar'])


@php
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Data Calon Siswa (Peserta Didik Baru)
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / <a href="{{ route('ppdb.pendaftar.index') }}" class="hover:underline">Data Calon Siswa</a> /
                {{ $pendaftar->nisn }}
            </h3>
        </div>
    </div>

    <div class="card w-full bg-white p-6 flex flex-col justify-center">
        {{-- <div class="grid grid-cols-1 lg:grid-cols-2">
            <div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">NISN</label>
                    <h4 class="text-xl font-bold">{{ $pendaftar->nisn }}</h4>
                </div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">Nama Lengkap</label>
                    <h4 class="text-xl font-bold">{{ $pendaftar->full_name }}</h4>
                </div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">Tempat dan Tanggal Lahir</label>
                    <h4 class="text-xl font-bold">{{ $pendaftar->place_birth }},
                        {{ Carbon::parse($pendaftar->date_birth)->translatedFormat('d F Y') }}
                        ({{ Carbon::parse($pendaftar->date_birth)->diff(Carbon::now())->format('%y th') }})</h4>
                </div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">Alamat</label>
                    <h4 class="text-xl font-bold">{{ $pendaftar->address }}</h4>
                </div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">Asal Sekolah</label>
                    <h4 class="text-xl font-bold">{{ $pendaftar->school_origin }}</h4>
                </div>
                <div class="form-control mb-6">
                    <label for="" class="appearance-none">Tahun Lulus</label>
                    <h4 class="text-xl font-bold">{{ Carbon::parse($pendaftar->graduation_year)->format('Y') }}</h4>
                </div>
            </div>
            <div>

            </div>
        </div> --}}

        <div class="w-full flex justify-center mb-3">
            <h4 class="w-full lg:w-4/5 font-bold">Informasi Siswa</h4>
        </div>
        <div class="overflow-x-auto lg:flex lg:justify-center">
            <table class="table border-2 table-zebra w-full lg:w-4/5">
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td class="w-[10%]">NISN</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->nisn }}</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td class="w-[10%]">Nama Lengkap</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->full_name }}</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td class="w-[10%]">Tempat dan Tanggal Lahir</td>
                        <td class="w-[70%] font-semibold">:
                            {{ Carbon::parse($pendaftar->date_birth)->translatedFormat('d F Y') }}
                            ({{ Carbon::parse($pendaftar->date_birth)->diff(Carbon::now())->format('%y th') }})</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Alamat</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->address }}</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Asal Sekolah</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->school_origin }}</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Tahun Lulus</td>
                        <td class="w-[70%] font-semibold">: {{ Carbon::parse($pendaftar->graduation_year)->format('Y') }}</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Nama Ayah</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->father_name }}</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Nama Ibu</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->mother_name }}</td>
                    </tr>
                    <tr>
                        <td class="w-[10%]">Nama Wali</td>
                        <td class="w-[70%] font-semibold">: {{ ($pendaftar->guardian_name ?? '-' ) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full flex justify-center mb-3 mt-4">
            <h4 class="w-full lg:w-4/5 font-bold">Informasi Kontak</h4>
        </div>
        <div class="overflow-x-auto lg:flex lg:justify-center">
            <table class="table border-2 table-zebra w-full lg:w-4/5">
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td class="w-[10%]">Telepon</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->phone }}</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td class="w-[10%]">Email</td>
                        <td class="w-[70%] font-semibold">: {{ $user->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full flex justify-center mb-3 mt-4">
            <h4 class="w-full lg:w-4/5 font-bold">Pilihan Jurusan</h4>
        </div>
        <div class="overflow-x-auto lg:flex lg:justify-center">
            <table class="table border-2 table-zebra w-full lg:w-4/5">
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td class="w-[10%]">Jurusan 1</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->major_name }}</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td class="w-[10%]">Jurusan 2</td>
                        <td class="w-[70%] font-semibold">: {{ $pendaftar->major_name2 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-full flex justify-center mb-3 mt-4">
            <div class=" flex flex-col gap-4 w-full lg:w-4/5">
                <h4 class="font-bold">Status</h4>
                <div class="badge badge-lg badge-warning">Belum Dicek</div>
            </div>
        </div>

    </div>
    </div>
@endsection
