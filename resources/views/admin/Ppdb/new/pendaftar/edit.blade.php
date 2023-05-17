@extends('admin.layouts.new.app', ['title' => 'Detail Pendaftar'])

@section('content')
<div class="flex w-full justify-center">
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Detail Pendaftar
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / <a href="{{ route('ppdb.pendaftar.index') }}" class="hover:underline">Data Pendaftar</a> / Detail
                Pendaftar
            </h3>
        </div>
    </div>
</div>

<div class="flex justify-center w-full mb-10">
    <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 lg:w-3/5">
        <h2 class="text-sm lg:text-base font-bold lg:text-center">
            Informasi Pendaftar
        </h2>
        <div class="divider"></div>
        {{--  --}}
        <div class="flex flex-col gap-2 mt-4">
            <label class="appearance-none text-sm lg:text-base font-bold">Data Siswa</label>
            <ul class="list-disc pl-6">
                <li class="mb-2">NISN : {{ $registration->nisn }}</li>
                <li class="mb-2">Nama Siswa : {{ $registration->full_name }}</li>
                <li class="mb-2">Tempat Lahir : {{ $registration->place_birth }}</li>
                <li class="mb-2">Tanggal Lahir : {{ $registration->date_birth }}</li>
                <li class="mb-2">No Handphone : {{ $registration->phone }}</li>
                <li class="mb-2">Tempat Lahir : {{ $registration->address }}</li>
                <li class="mb-2">Asal Sekolah : {{ $registration->school_origin }}</li>
                <li class="mb-2">Tahun Lulus : {{ $registration->graduation_year }}</li>
                <li class="mb-2">Nama Ayah : {{ $registration->father_name }}</li>
                <li class="mb-2">Nama Ibu: {{ $registration->mother_name }}</li>
                <li class="mb-2">Nama Wali: {{ $registration->guardian_name }}</li>
               
            </ul>
        <div class="flex flex-col gap-2 mt-2">
            <div class="flex flex-col gap-2 mt-4">
                <label class="appearance-none text-sm lg:text-base font-bold">Jurusan Yang diminati</label>
                <ul class="list-disc pl-6">
                    <li class="mb-2">Pilihan Jurusan 1 : {{ $registration->major1->name }}</li>
                    <li class="mb-2">Pilihan Jurusan 2 : {{ $registration->major2->name }}</li>
                </ul>
            <div class="flex flex-col gap-2 mt-4">
    
        <form action="{{ route('ppdb.pendaftar.update', $registration->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="flex flex-col gap-2 mt-4">
                <label class="appearance-none text-sm lg:text-base font-bold">Status</label>
                <select name="status" class="select select-info border">
                    <option value="0" {{ $registration->user_registration_status === 0 ? 'selected' : '' }}>Belum Diterima</option>
                    <option value="1" {{ $registration->user_registration_status === 1 ? 'selected' : '' }}>Diterima</option>
                </select>
            </div>
            <div class="flex flex-col-reverse gap-3 lg:flex-row items-center justify-end mt-8">
                <a href="{{ route('ppdb.pendaftar.index') }}" class="btn btn-error btn-outline hover:text-white flex items-center gap-2 w-full lg:w-fit" type="submit">
                    <span><i class="fa-solid fa-arrow-left-long"></i></span> KEMBALI
                </a>
                <button class="btn text-white flex items-center gap-2 w-full lg:w-fit" type="submit"
                onclick="destroySchoolYear(event, this)">
                    <span><i class="fa-solid fa-check"></i></span> UPDATE STATUS
                </button>
            </div>
        </form>
        
    </div>
</div>
@endsection
