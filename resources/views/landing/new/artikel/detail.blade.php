@extends('landing.new.layouts.app')

@section('content')
    <div class="max-h-[30rem] py-8 px-10">

        @php
            use Carbon\Carbon;
        @endphp
        <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
            <div class="flex-1 h-full mt-4 md:mt-0 w-full max-w-[75%]">
                <h1 class="text-xl text-center md:text-left md:text-2xl font-bold text-slate-800">{{ $artikel->title }}</h1>
                <div class="flex flex-row gap-6 mt-4">
                    <div class="flex flex-row gap-1">
                        <ion-icon name="calendar"></ion-icon>
                        <p class="text-sm text-slate-800">{{ Carbon::parse($artikel->updated_at)->format('d M Y') }}</p>
                    </div>
                    <div class="flex flex-row gap-1">
                        <ion-icon name="person"></ion-icon>
                        <p class="text-sm text-slate-800">admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 pb-24">
        <div class="container">
            <div class="w-full lg:w-3/4">
                <div class="w-full lg:h-[500px] lg:w-full border">
                    @if ($artikel->thumbnail)
                        <img src="{{ asset('storage/app/' . $artikel->thumbnail) }}" alt=""
                            class="w-full h-full object-cover" />
                    @else
                        <img src="{{ getAsset('assets/images/img-not-found.png') }}" alt=""
                            class="w-full h-full object-cover" />
                    @endif
                </div>
                <div class="w-full mt-6">
                  {!! $artikel->description ?? '-' !!}
                </div>
            </div>
            <a href="{{ route('landing.artikel.index') }}" class="btn btn-error text-white flex items-center w-fit gap-2 mt-4">
                <span>
                    <ion-icon name="arrow-back"></ion-icon>
                </span>
                Artikel</a>
        </div>
    </div>
@endsection
