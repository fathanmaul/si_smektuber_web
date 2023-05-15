@extends('admin.layouts.new.app', ['title' => 'Daftar PPDB'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar PPDB (Penerimaan Peserta Didik Baru)
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / Daftar PPDB
            </h3>
        </div>
    </div>

    <div class="card p-6 rounded bg-white mt-2 drop-shadow-lg">
        <x-alert />
        <form action="{{ route('ekstrakurikuler.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Cari berdasarkan tahun ajaran..." name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('ekstrakurikuler.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    PPDB
                </a>
            </div>
        </form>
        <div class="my-4">
            <div class="overflow-x-auto mt-4">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th style="width: 3%">NO</th>
                            <th style="width: 400px">Tahun Ajaran</th>
                            <th style="width: 400px">Dibuat pada</th>
                            <th style="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
