@extends('landing.new.layouts.app')

@section('content')
    <div class="max-h-[30rem] bg-slate-100 py-8 px-10">
        <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
            <div class="flex-1 h-full mt-4 md:mt-0">
                <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">Tentang</h1>
                <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">Profil Sekolah</p>
            </div>
            {{-- <div class="flex-1 flex items-center justify-center">
                <img src="{{ getAsset('assets/images/logo/logo-smk7.png') }}" alt=""
                    class="w-[150px]  h-[150px] md:w-[210px] md:h-[210px]">
            </div> --}}
        </div>
    </div>
    <div class="px-10 pb-10 ">
        <div class="container mt-8">
            <div class="flex flex-col gap-4">
                <h1 class="font-semibold text-xl md:text-xl">Selayang Pandang</h1>
                <div class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200">
                    <p>{{ $about->school_history }}</p>
                </div>
                <div class="flex flex-col gap-4 pb-4">
                    <h1 class="font-semibold text-xl md:text-xl pt-4">Sambutan Kepala Sekolah</h1>
                    <div class="flex flex-col gap-4 md:flex-row">
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col-reverse md:flex-row gap-4">
                            <div class="flex-1">
                                @if ($about->school_headmaster_quote)
                                    <p>"{{ $about->school_headmaster_quote }}"</p>
                                @else
                                    <p>-</p>
                                @endif

                                <p class="mt-4 font-bold">- {{ $about->school_headmaster_name }}</p>
                            </div>
                            <div class="flex flex-row justify-center md:justify-end">
                                @if ($about->school_headmaster_picture)
                                    <img src="{{ url('storage/app/' . $about->school_headmaster_picture) }}" alt=""
                                        class="w-[200px] h-fit rounded-full">
                                @else
                                    <img src="{{ getAsset('assets/images/img-not-found.png') }}"
                                        alt="" class="w-[200px] h-[200px] object-cover">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col gap-4 pb-4">
                    <h1 class="font-semibold text-xl md:text-xl pt-4">Visi dan Misi</h1>
                    <div class="flex flex-col gap-4 md:flex-row">
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col gap-4">
                            <h1 class="font-bold text-xl">Visi</h1>
                            <p>{{ $about->school_vision }}</p>
                        </div>
                        <div
                            class="card p-8 shadow-lg rounded bg-slate-50 border border-gray-200 w-full flex flex-col gap-4">
                            <h1 class="font-bold text-xl">Misi</h1>
                            <div class=" pl-4">
                                {!! $about->school_mission !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
