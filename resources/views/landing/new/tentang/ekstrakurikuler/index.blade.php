@extends('landing.new.layouts.app')

@section('content')
<div class="max-h-[30rem] bg-slate-100 py-8 px-10">
  <div class="container mx-auto flex flex-col-reverse gap-8 md:gap-0 md:flex-row items-center justify-between">
    <div class="flex-1 h-full mt-4 md:mt-0">
      <h1 class="text-xl text-center md:text-left md:text-xl font-bold text-slate-800">Tentang</h1>
      <p class="text-sm mt-4 text-center md:text-left md:text-base text-slate-800">Daftar Ekstrakurikuler</p>
    </div>
    {{-- <div class="flex-1 flex items-center justify-center">
      <img src="../../dist/assets/img/logo/logo-smk7.png" alt=""
        class="w-[150px]  h-[150px] md:w-[210px] md:h-[210px]"> --}}
    </div>
  </div>
</div>
<div class="px-10 pb-[20rem]">
  <div class="container mt-8">
    <div class="flex flex-col gap-4">
      <h1 class="font-semibold text-xl md:text-xl">Ekstrakurikuler</h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($ekstra as $item)
        <div class="card flex flex-row shadow-lg rounded bg-slate-50 border border-gray-200 overflow-hidden">
          <div class="h-full w-[7px] bg-[#007bbd]"></div>
          <div class="p-4">
            <button type="button" class="transition-all ease-in-out duration-200 hover:text-slate-600">{{ $item->extracurricular_name }}</button>
          </div>
        </div>
        @endforeach
        {{-- <div class="card flex flex-row shadow-lg rounded bg-slate-50 border border-gray-200 overflow-hidden">
          <div class="h-full w-[7px] bg-[#007bbd]"></div>
          <div class="p-4">
            <a href="#" class="transition-all ease-in-out duration-200 hover:text-slate-600">Pramuka</a>
          </div>
        </div>
        <div class="card flex flex-row shadow-lg rounded bg-slate-50 border border-gray-200 overflow-hidden">
          <div class="h-full w-[7px] bg-[#007bbd]"></div>
          <div class="p-4">
            <a href="#" class="transition-all ease-in-out duration-200 hover:text-slate-600">Taekwondo</a>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
@endsection