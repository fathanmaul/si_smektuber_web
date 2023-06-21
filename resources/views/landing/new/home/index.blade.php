@extends('landing.new.layouts.app')

@section('content')
    <div class=" bg-slate-100 py-20 px-10" style="background-image: url({{ getAsset('assets/images/bg-paper.jpg') }});">
        <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
            <div class="flex-1 h-full mt-4 md:mt-0">
                <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">SELAMAT DATANG DI WEBSITE
                    <span>SMK N 7 JEMBER</span>
                </h1>
                <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">Bergabunglah Bersama Kami dan
                    menjadi bagian dari Keluarga SMEKTUBER</p>
                <button class="btn w-full md:w-fit btn-primary mt-4 rounded">Cek
                    Pendaftaran</button>
            </div>
            <div class="flex-1 flex items-center justify-center">
                <img src="{{ getAsset('assets\images\logo\logo-smk7.png') }}" alt=""
                    class="w-[150px]  h-[150px] md:w-[210px] md:h-[210px]">
            </div>
        </div>
    </div>
    <div class="px-10 pb-10 mt-12">
        <div class="container ">
            <div>
                <h1 class="font-semibold text-xl md:text-xl">Artikel Terbaru</h1>
            </div>
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">
                <!-- Article Card Start Here -->

                @foreach ($artikel as $item)
                    <div class="card bg-slate-50 transition-all ease-in-out duration-200 rounded hover:shadow-xl">
                        @if ($item->thumbnail != null)
                            <figure class="w-full h-[200px]"><img src="{{ url('storage/app/' . $item->thumbnail) }}"
                                    alt="Album" class="object-cover w-full h-full" /></figure>
                        @else
                            <figure class="w-full h-[200px]"><img src="{{ getAsset('assets/images/img-not-found.png') }}"
                                    alt="Album" class="object-cover w-full h-full" /></figure>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title text-lg">{{ $item->title }}</h2>
                            <p class="text-base"></p>
                            <div class="card-actions justify-end">
                                <a href="{{ route('landing.artikel.detail', $item->slug) }}" class="btn btn-primary w-fit">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Article Card End Here -->
            </div>
        </div>
    </div>
@endsection
