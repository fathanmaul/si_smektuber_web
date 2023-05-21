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
                    <input type="text" class="input input-bordered w-full pl-11 pr-[9rem] lg:pr-[16.5rem] dark:bg-white"
                        placeholder="Cari berdasarkan nama siswa" name="keyword"
                        @if (request()->has('keyword')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                    {{-- <span class="absolute right-20 text-gray-900">
                        <select class="select select-bordered select-sm w-5 lg:w-[180px]" name="tahun_ajaran">
                            <option disabled selected value="">Pilih Tahun Ajaran</option>
                            @if (request()->tahun_ajaran == 'all')
                                <option value="all" selected>Semua</option>
                            @else
                                <option value="all">Semua</option>
                            @endif
                            @foreach ($tahun_ajaran as $item)
                                <option value="{{ $item->id }}"
                                    {{ request()->tahun_ajaran == $item->id ? 'selected' : '' }}>
                                    {{ $item->school_year }}</option>
                            @endforeach
                        </select>
                    </span> --}}
                </div>
            </div>
        </form>
        <div class="my-4">
            <div class="overflow-x-auto mt-4">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th class="w-[4%]">No</th>
                            <th class="w-[10%]">NISN</th>
                            <th class="w-[20%]">Nama Siswa</th>
                            <th class="w-[20%]">Asal Sekolah</th>
                            <th class="w-[10%]">Tahun Lulus</th>
                            <th class="w-[10%]">Status</th>
                            <th class="w-[10%]">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($pendaftar as $index => $registration)
                            <tr>
                                <td>{{ $pendaftar->firstItem() + $index }}</td>
                                <td>{{ $registration->nisn }}</td>
                                <td>{{ $registration->full_name }}</td>
                                <td>{{ $registration->school_origin }}</td>
                                <td>{{ Carbon::parse($registration->graduation_year)->format('Y') }}</td>
                                <td>
                                    @if ($registration->status == 1)
                                    <div class="badge badge-success text-white">Diterima</div>
                                    @else
                                    <div class="badge badge-warning text-white">Belum Dicek</div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('ppdb.pendaftar.show', $registration->id) }}" class="btn btn-sm">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pendaftar->links() }}
            </div>
        </div>
    </div>
@endsection
