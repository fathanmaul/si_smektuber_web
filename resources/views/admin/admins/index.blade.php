@extends('admin.layouts.new.app', ['title' => 'Daftar Admin'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Daftar Admin SI PPDB {{ $school_name }}
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Admin / Daftar Admin
            </h3>
        </div>
    </div>

    <div class="card bg-white p-6 drop-shadow-lg">
        
    </div>
@endsection
