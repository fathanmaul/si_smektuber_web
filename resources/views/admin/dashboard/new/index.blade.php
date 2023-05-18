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
                <h3 class="text-lg">Jurusan</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold">{{ $countJurusan }}</h4>
            </div>
        </div>
        <div class="card rounded-md p-6 my-2 mx-2 h-[150px] bg-white drop-shadow-lg">
            <div>
                <h3 class="text-lg">Ekstrakurikuler</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold">{{ $countJurusan }}</h4>
            </div>
        </div>
        <div class="card rounded-md p-6 my-2 mx-2 h-[150px] bg-white drop-shadow-lg">
            <div>
                <h3 class="text-lg">PPDB</h3>
            </div>
            <div class="h-full flex items-end justify-end ">
                <h4 class="text-4xl font-bold">10</h4>
            </div>
        </div>


    </div>
    <div class="px-6 pt-6 pb-3">
        <h3 class="text-lg font-semibold">Artikel Terbaru</h3>
    </div>
    @foreach ($artikel as $item)
        <div
            class="card rounded-md bg-white drop-shadow-lg mx-2 mb-5 flex flex-col h-[500px] lg:h-[250px]  lg:flex-row gap-4">
            <div class="w-full h-[200px] lg:w-[250px] lg:h-[250px]">
                @if ($item->thumbnail)
                    <img src="{{ asset('storage/' . $item->thumbnail) }}"
                        class="w-full h-full object-cover bg-center rounded-t-md lg:rounded-l-md" alt="">
                @else
                    <img src="{{ asset('assets/images/img-not-found.png') }}"
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
                <div class="h-[70px] overflow-hidden">
                    <p>{!! $item->description !!}</p>
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
@endsection
