@extends('admin.layouts.new.app', ['title' => 'Tambah Admin'])

@section('content')
    <div class="flex w-full justify-center">
        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Tambah Admin
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Admin / <a href="{{ route('admin.index') }}" class="hover:underline">Daftar Admin</a> / Tambah
                    Admin
                </h3>
            </div>
        </div>
    </div>

    <div class="flex justify-center w-full mb-10">
        <div class="card rounded p-6 drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
            <form action="" method="post">
                @csrf
                <div class="form-control gap-2">
                    <label for="name" class="appearance-none">Nama</label>
                    <input type="text" name="name" id="name" class="input input-bordered" placeholder="">
                </div>
            </form>
        </div>
    </div>
@endsection
