@extends('admin.layouts.new.app', ['title' => 'Daftar Admin'])

@php
use Carbon\Carbon;
    $data = '';
    $data = ($admins ?? '');
@endphp
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
        <x-alert />

        <form action="{{ route('admin.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Nama, username...." name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('admin.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    Admin
                </a>
            </div>
        </form>
        <div class="overflow-x-auto mt-4">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th style="width: 5%">NO</th>
                        <th style="width: 20%">Nama Admin</th>
                        <th style="width: 20%">Username</th>
                        <th style="width: 20%">Dibuat Pada</th>
                        <th style="width: 20%">Role</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data)
                        @foreach ($data as $key => $admin)
                            <tr>
                                <td>{{ $admins->firstItem() + $key }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ Carbon::parse($admin->created_at)->translatedFormat('d M Y - H:i') }}</td>
                                <td>{{ $admin->role_name }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <div class="tooltip" data-tip="Ubah Admin">
                                            <a href="{{ route('admin.edit', $admin->id) }}"
                                                class="btn btn-square btn-sm btn-warning text-white flex items-center justify-center">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="tooltip" data-tip="Hapus Admin">
                                            <a href="{{ route('admin.edit', $admin->id) }}"
                                                class="btn btn-square btn-sm btn-error text-white flex items-center justify-center">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">Tidak Ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
