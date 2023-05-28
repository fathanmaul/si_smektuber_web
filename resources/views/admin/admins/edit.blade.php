@extends('admin.layouts.new.app', ['title' => 'Ubah Admin'])

@section('content')
    <div class="flex w-full justify-center">
        <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
            <div class="flex-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-white">
                    Ubah Admin
                </h1>
            </div>
            <div class="flex-1">
                <h3 class="text-sm lg:text-md font-normal text-white">
                    Admin / <a href="{{ route('admin.index') }}" class="hover:underline">Daftar Admin</a> / Ubah
                    Admin
                </h3>
            </div>
        </div>
    </div>

    <div class="flex justify-center w-full mb-10">
        <div class="card rounded p-6 w-full drop-shadow-lg bg-white mt-4 lg:w-3/5 ">
            <x-alert />
            <form action="{{ route('admin.put', $admin->id) }}" id="formEdit" method="post">
                @csrf
                @method('PUT')
                <div class="form-control gap-2 mb-4">
                    <label for="name" class="appearance-none">Nama</label>
                    <input type="text" name="name" id="name"
                        class="input input-bordered 
                    @error('name')
                        input-error
                    @enderror"
                        @if (old('name')) value="{{ old('name') }}"
                        @else
                            value="{{ $admin->name }}" @endif>
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control gap-2 mb-4">
                    <label for="name" class="appearance-none">Username</label>
                    <input type="text" name="username" id="username"
                        class="input input-bordered @error('username')
                        input-error
                    @enderror"
                        @if (old('username')) value="{{ old('username') }}"
                    @else
                        value="{{ $admin->username }}" @endif>
                    @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                @if ($admin->id != 1 && $admin->id != auth()->user()->id)
                    <div class="form-control gap-2 mb-4">
                        <div class="flex items-center gap-2">
                            <label for="" class="appearance-none">Role / Jabatan</label>
                            <label for="my-modal" class="flex justify-center items-center">
                                <i class="fa-solid fa-circle-question"></i>
                            </label>
                        </div>
                        <select name="role" id=""
                            class="input input-bordered @error('role')
                        input-error
                    @enderror">
                            <option disabled selected>Pilih Role / Jabatan</option>
                            <option value="1" @if ($admin->role_id == 1) selected @endif>Superadmin</option>
                            <option value="2" @if ($admin->role_id == 2) selected @endif>Admin</option>
                        </select>
                        @error('role')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                @endif


                <div class="flex flex-col-reverse lg:flex-row justify-end items-center gap-4 lg:gap-2 mt-7 w-full">
                    <a href="{{ route('admin.index') }}" class="btn btn-error btn-outline w-full lg:w-fit">
                        kembali
                    </a>
                    <a href="{{ route('admin.index') }}" class="btn flex items-center gap-2 w-full lg:w-fit"
                        id="btn-show">
                        <i class="fa-solid fa-floppy-disk"></i>
                        SIMPAN
                    </a>
                </div>
            </form>
        </div>
    </div>

    @if ($admin->id != 1 && $admin->id != auth()->user()->id)
        <input type="checkbox" id="my-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box rounded">
                <h3 class="font-bold text-lg">Role / Jabatan</h3>
                <p class="py-4">Role / Jabatan pada sistem ini dibagi menjadi dua, yaitu : </p>
                <div class="mx-4">
                    <ol class="flex flex-col gap-2">
                        <li>
                            <strong>Superadmin</strong>
                            <p>Dapat mengakses seluruh fitur yang ada pada sistem. <strong
                                    class="text-green-400">Bisa</strong>
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
    @endif

    <input type="checkbox" id="modal-confirm-edit" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box rounded">
            <h3 class="font-bold text-lg">Yakin ingin mengubah data admin ini?</h3>
            <div class="modal-action">
                <label for="modal-confirm-edit" class="btn">BATAL</label>
                <button class="btn btn-warning btn-outline" id="submitButton">UBAH</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ getAsset('js/admin/admin/edit-form.js') }}"></script>
@endsection
