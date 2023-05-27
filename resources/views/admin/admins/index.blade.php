@extends('admin.layouts.new.app', ['title' => 'Daftar Admin'])

@php
    use Carbon\Carbon;
    $data = '';
    $data = $admins ?? '';
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
                        placeholder="cari berdasarkan nama..." name="cari"
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
                        <th style="width: 20%">Role / Jabatan</th>
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
                                        @if ($admin->id != 1)
                                            <a href="{{ route('admin.edit', $admin->id) }}"
                                                class="btn btn-sm btn-square text-white btn-warning">
                                                <i class="fa-solid fa-pencil"></i>
                                            </a>
                                            @if ($admin->id != auth()->user()->id)
                                                <button data-url="{{ route('admin.destroy', $admin->id) }}" type="submit"
                                                    class="btn btn-sm btn-square text-white btn-error"
                                                    onclick="destroyAdmin(event, this)">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            @endif
                                        @else
                                            <span class="text-sm font-bold">-</span>
                                        @endif
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


    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="modal-destroy" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box rounded">
            <form method="post" id="modalDestroyAdmin" class="m-0">
                @csrf
                @method('DELETE')
                <h3 class="font-bold text-lg">Yakin ingin menghapus Admin ini?</h3>
                <div class="modal-action">
                    <label for="modal-destroy" class="btn" id="btn-cancel">Batal</label>
                    <button type="submit" class="btn btn-error btn-outline">Hapus</button>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('js/admin/admin/delete-admin.js') }}"></script>
@endsection
