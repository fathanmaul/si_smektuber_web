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
        <div class="card rounded p-6 w-full drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
            <x-alert/>
            <form action="" method="post">
                @csrf
                <div class="form-control gap-2 mb-4">
                    <label for="name" class="appearance-none">Nama</label>
                    <input type="text" name="name" id="name" class="input input-bordered 
                    @error('name')
                        input-error
                    @enderror"
                    value="{{ old('name') }}">
                    @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control gap-2 mb-4">
                    <label for="name" class="appearance-none">Username</label>
                    <input type="text" name="username" id="username" class="input input-bordered @error('username')
                        input-error
                    @enderror" value="{{ old('username') }}">
                    @error('username')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control gap-2 mb-4">
                    <div class="flex items-center gap-2">
                        <label for="" class="appearance-none">Role / Jabatan</label>
                        <label for="my-modal" class="flex justify-center items-center">
                            <i class="fa-solid fa-circle-question"></i>
                        </label>
                    </div>
                    <select name="role" id="" class="input input-bordered @error('role')
                        input-error
                    @enderror">
                        <option disabled selected>Pilih Role / Jabatan</option>
                        <option value="1">Superadmin</option>
                        <option value="2">Admin</option>
                    </select>
                    @error('role')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="alert shadow-lg bg-yellow-100 mt-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current text-yellow-400">
                            <path
                                d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                        </svg>
                        <span>Password default adalah <strong>admin123</strong> <br>Jika ingin mengubahnya, harap lakukan
                            pada menu Akun</span>
                    </div>
                </div>
                <div class="flex flex-row justify-end items-center gap-2 mt-7 w-full">
                    <a href="{{ route('admin.index') }}" class="btn btn-error btn-outline">
                        kembali
                    </a>
                    <button class="btn flex items-center justify-center gap-2" type="submit">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Role / Jabatan</h3>
            <p class="py-4">Role / Jabatan pada sistem ini dibagi menjadi dua, yaitu : </p>
            <div class="mx-4">
                <ol class="flex flex-col gap-2">
                    <li>
                        <strong>Superadmin</strong>
                        <p>Dapat mengakses seluruh fitur yang ada pada sistem. <strong class="text-green-400">Bisa</strong>
                            melakukan pengubahan data para admin</p>
                    </li>
                    <li>
                        <strong>Admin</strong>
                        <p>Dapat mengakses seluruh fitur yang ada pada sistem. <strong class="text-red-400">Tidak
                                Bisa</strong> melakukan pengubahan data para admin</p>
                    </li>

                </ol>
            </div>
            <div class="modal-action">
                <label for="my-modal" class="btn">Oke, Saya Mengerti</label>
            </div>
        </div>
    </div>
@endsection
