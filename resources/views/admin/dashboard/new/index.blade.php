@extends('admin.layouts.new.app', ['title' => 'Dashboard'])

@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Halo, {{ Auth::user()->name }}
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Dashboard
            </h3>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <div class="card rounded-md p-6 my-2 mx-2 h-[150px] bg-white drop-shadow-lg">
            <div>
                <h3 class="text-lg text-primary">Jurusan</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold text-primary">{{ $countJurusan }}</h4>
            </div>
        </div>
        <div class="card rounded-md p-6 my-2 mx-2 h-[150px] bg-white drop-shadow-lg">
            <div>
                <h3 class="text-lg text-primary">Ekstrakurikuler</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold text-primary">{{ $countJurusan }}</h4>
            </div>
        </div>
        <div class="card rounded-md p-6 my-2 mx-2 h-[150px] bg-white drop-shadow-lg">
            <div>
                <h3 class="text-lg text-primary">Artikel</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold text-primary">{{ $countArtikel }}</h4>
            </div>
        </div>


    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-3">
        <div class="col-span-2">
            <div class="px-6 pt-6 pb-3 flex flex-row items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="w-5 h-5 flex items-center justify-center">
                    <path
                        d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
                </svg>
                <h3 class="text-lg lg:text-xl font-semibold">Artikel Terbaru</h3>
            </div>
            @foreach ($artikel as $item)
                <div
                    class="card rounded-md bg-white drop-shadow-lg mx-2 mb-5 flex flex-col h-[500px] lg:h-[250px]  lg:flex-row gap-4">
                    <div class="w-full h-[200px] lg:w-[250px] lg:h-[250px]">
                        @if ($item->thumbnail)
                            <img src="{{ url('storage/app/' . $item->thumbnail) }}"
                                class="w-full h-full object-cover bg-center rounded-t-md lg:rounded-l-md" alt="">
                        @else
                            <img src="{{ getAsset('assets/images/img-not-found.png') }}"
                                class="w-full h-full object-cover bg-center rounded-t-md lg:rounded-l-md" alt="">
                        @endif
                    </div>
                    <div class="flex flex-col px-6 pb-6 lg:py-6 flex-1">
                        <div>
                            <h3 class="font-bold text-lg">{{ $item->title }}</h3>
                        </div>
                        <div class="w-full py-2 flex flex-row">
                            <div class="flex items-center gap-2 text-sm">
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ Carbon::parse($item->created_at)->diffForHumans() }}
                            </div>
                        </div>
                        <div class="h-[50px] overflow-hidden text-ellipsis">
                            <p class="text-ellipsis">{!! $item->description !!}</p>
                        </div>
                        <div class="flex-1 flex items-end justify-end">
                            <div>
                                <a href="{{ route('artikel.show', $item->slug) }}" class="btn">
                                    BACA SELENGKAPNYA
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <div>
            <div class="px-6 pt-6 pb-3">
                <h3 class="text-lg lg:text-xl font-semibold">PPDB Yang Sedang Berjalan</h3>
            </div>
            <div class="card p-6 drop-shadow-lg bg-white flex flex-col gap-4">
                @if ($ppdb)
                    <div class="form-control gap-2">
                        <label for="#" class="apperance-none">Tahun Ajaran</label>
                        <p class="font-bold text-lg">{{ $ppdb->school_year ?? '-' }}</p>
                    </div>
                    <div class="form-control gap-2">
                        <label for="#" class="apperance-none">Dimulai pada</label>
                        <p class="font-bold text-lg">
                            {{ $ppdb->date_start ? Carbon::parse($ppdb->date_start)->translatedFormat('d F Y') : '-' }}</p>
                    </div>
                    <div class="form-control gap-2">
                        <label for="#" class="apperance-none">Berakhir pada</label>
                        <p class="font-bold text-lg">
                            {{ $ppdb->date_start ? Carbon::parse($ppdb->date_end)->translatedFormat('d F Y') : '-' }}</p>
                    </div>
                    <div class="form-control gap-2">
                        <label for="#" class="apperance-none">Jumlah pendaftar</label>
                        <p class="font-bold text-lg">{{ $ppdb->total ?? '-' }}</p>
                    </div>
                @else
                    <div class="text-center text-sm">
                        Tidak Ada PPDB Yang Sedang Berjalan / Aktif
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection