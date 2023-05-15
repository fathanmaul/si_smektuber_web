@extends('admin.layouts.new.app', ['title' => 'Dashboard'])

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
        <div class="card rounded-md p-8 my-2 mx-2 h-[150px] bg-white">

        </div>
        <div class="card rounded-md p-8 my-2 mx-2 h-[150px] bg-white">

        </div>
        <div class="card rounded-md p-8 my-2 mx-2 h-[150px] bg-white">

        </div>
        
    </div>
@endsection
