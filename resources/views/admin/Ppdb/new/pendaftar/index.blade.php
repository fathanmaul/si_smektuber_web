@extends('admin.layouts.new.app', ['title' => 'Data Calon Pendaftar'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Data Calon Siswa (Peserta Didik Baru)
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / Data Calon Siswa
            </h3>
        </div>
    </div>

    <div class="card p-6 rounded bg-white mt-2 drop-shadow-lg">
        <x-alert />
        <form action="{{ route('ppdb.pendaftar.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Cari berdasarkan nama siswa atau asal sekolah..." name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                {{-- <a href="{{ route('ppdb.pendaftar.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    Tambah Pendaftar
                </a> --}}
            </div>
        </form>
        <div class="my-4">
            <div class="overflow-x-auto mt-4">
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Nama Siswa</th>
                            <th class="text-left">Asal Sekolah</th>
                            <th class="text-left">Tahun Lulus</th>
                            <th class="text-left">Status</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftar as $index => $registration)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $registration->full_name }}</td>
                                <td>{{ $registration->school_origin }}</td>
                                <td>{{ $registration->graduation_year }}</td>
                                <td>
                                    @if ($registration->user_registration_status === 0)
                                        <span class="text-red-500">Belum Diterima</span>
                                    @elseif ($registration->user_registration_status === 1)
                                        <span class="text-green-500">Diterima</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('ppdb.pendaftar.show', $registration->id) }}"
                                        class="btn btn-sm btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
