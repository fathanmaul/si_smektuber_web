@extends('admin.Profile.app', ['title' => 'Ubah Password'])

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Ubah Password
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Profil / Password
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

            <form action="{{ route('akun.password.put') }}" method="post" class="my-0">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <div class="form-control gap-2 mb-2">
                        <label for="" class="appereance-none">Masukkan Password Lama</label>
                        <input type="password" name="old_password" class="input input-bordered @error('old_password') input-error @enderror">
                        @error('old_password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control gap-2 mb-2">
                        <label for="" class="appereance-none">Masukkan Password Baru</label>
                        <input type="password" name="password" class="input input-bordered @error('password') input-error @enderror">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control gap-2 mb-2">
                        <label for="" class="appereance-none">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation" class="input input-bordered @error('password_confirmation') input-error @enderror">
                        @error('password_confirmation')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
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
