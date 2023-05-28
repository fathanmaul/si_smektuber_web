@extends('admin.Profile.app', ['title' => 'Pengaturan Profil'])

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Pengaturan Profil
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Profil
                </h3>
            </div>
        </div>
    </div>


    <div class="flex justify-center">
        <div class="w-full lg:w-3/5">
            <x-alert />
        </div>
    </div>
    <div class="flex justify-center">
        <div class="card w-full bg-white lg:w-3/5 p-6 drop-shadow-lg">
            @include('admin.Profile.components.tabs')
            <form action="{{ route('akun.put') }}" method="POST" class="my-0">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <div class="form-control gap-2 mb-2">
                        <label for="name" class="appereance-none">Nama</label>
                        <input type="text"
                            class="input input-bordered @error('name')
                        input-error
                        @enderror"
                            name="name"
                            @if (old('name')) value="{{ old('name') }}"
                        @else
                        value="{{ $user->name }}" @endif>
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control gap-2 mb-2">
                        <label for="name" class="appereance-none">Username</label>
                        <input type="text" class="input input-bordered @error('username') input-error @enderror"
                            name="username"
                            @if (old('username')) value="{{ old('username') }}" 
                        @else
                        value="{{ $user->username }}" @endif>
                        @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="form-control gap-2 mb-3">
                        <label for="name" class="appereance-none">Email</label>
                        <input type="text" class="input input-bordered @error('email') input-error @enderror"
                            name="email"
                            @if (old('email')) value="{{ old('email') }}"
                    @else
                        value="{{ $user->email ?? '' }}" @endif
                            placeholder="{{ $user->email ? '' : 'Email belum ditambahkan! Harap isi email anda disini' }}">
                            @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                            
                    </div>
                    <div class="form-control gap-2">
                        <label for="name" class="appereance-none">Role / Jabatan</label>
                        <h4 class="text-xl font-bold">{{ $user->role_name }}</h4>
                    </div>
                    <div class="form-control gap-2 mt-4">
                        <div class="flex flex-col lg:flex-row-reverse gap-3 w-full">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-ghost bg-gray-200 text-black">KEMBALI</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
