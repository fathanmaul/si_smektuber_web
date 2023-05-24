@extends('admin.layouts.new.app', ['title' => 'Daftar Artikel'])

@php
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="flex justify-center">
        <div class="card bg-white w-full lg:w-3/4 rounded drop-shadow-lg">
            <div class="p-6">
                <div class="flex flex-col items-center justify-center">
                    <div class="my-2">
                        <h2>A&nbsp;R&nbsp;T&nbsp;I&nbsp;K&nbsp;E&nbsp;L</h2>
                    </div>
                    <div class="divider my-0 w-full lg:w-1/2 mx-auto"></div>
                    <h2 class="font-bold text-xl lg:text-2xl mt-4 max-w-lg text-center">{{ $artikel->title }}</h2>
                </div>
            </div>

            <div class="w-full h-[350px]">
                @if ($artikel->thumbnail != null)
                    <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="" class="w-full h-full object-cover" />
                @else
                    <img src="{{ asset('assets/images/img-not-found.png') }}" alt=""
                        class="w-full h-full object-cover" />
                @endif
            </div>
            <div class="p-6">
                <div class="flex flex-row items-center justify-center gap-4">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p class="text-sm">{{ Carbon::parse($artikel->created_at)->translatedFormat('d F Y - H:m') }}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-user"></i>
                        <p class="text-sm hover:underline">admin</p>
                    </div>
                </div>
                <div class="mt-9 mb-5">
                    <div class="text-justify">
                        {!! $artikel->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
