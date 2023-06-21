@extends('landing.new.layouts.app')
@php
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="max-h-[30rem] bg-slate-100 py-8 px-10">
        <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
            <div class="flex-1 h-full mt-4 md:mt-0">
                <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">Penerimaan Peserta Didik
                    Baru</h1>
                <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">PPDB Terbaru</p>
            </div>
        </div>
    </div>
    <div class="px-10 pb-[20rem]">
        <div class="container mt-8">
            <div class="w-full lg:w-3/4">
                <div
                    class="card w-full max-h-lg flex flex-col gap-4 lg:flex-row shadow-lg border border-slate-100 overflow-hidden rounded">
                    <div class="w-full h-[250px] lg:w-[250px] lg:h-[250px] border">
                        <img src="{{ $registration->poster ? url('storage/app' . $registration->poster) : getAsset('assets/images/img-not-found.png') }}"
                            alt="" class="object-cover w-full h-full object-top">
                    </div>
                    <div class="flex-1 flex flex-col gap-2 w-full lg:max-w-[60%] px-4 pb-8 lg:py-4">
                        <h1 class="font-bold overflow-hidden text-ellipsis whitespace-nowrap">PPDB Tahun Ajaran
                            {{ $registration->tahun_ajaran }}</h1>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-row gap-1">
                                <ion-icon name="calendar"></ion-icon>
                                <p class="text-sm text-slate-800">
                                    {{ Carbon::parse($registration->created_at)->format('d M Y') }}</p>
                            </div>
                            <div class="flex flex-row gap-1">
                                <ion-icon name="person"></ion-icon>
                                <p class="text-sm text-slate-800">admin</p>
                            </div>
                        </div>
                        <p class="text-sm mt-2 lg:mt-0"
                            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $registration->description }}
                        </p>
                        <a href="./detail-artikel.html" class="text-sm hover:underline hover:text-blue-600">Lihat
                            Selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
