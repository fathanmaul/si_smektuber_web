@extends('admin.layouts.new.app', ['title' => 'Post'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar Post
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Post / Daftar Post
            </h3>
        </div>
    </div>

    <div class="card bg-white p-6 drop-shadow-lg rounded mt-3">
        <x-alert />
        <form action="{{ route('post.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-4 lg:gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Masukkan kata kunci" name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                        @else
                        value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('post.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    POST
                </a>
            </div>
        </form>

        <div class="overflow-x-auto mt-4">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th style="width: 5%">NO</th>
                        <th style="width: 75%">Judul Post</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($posts)
                        @foreach ($posts as $item => $value)
                            <!-- row 1 -->
                            <tr>
                                <th>{{ $posts->firstItem() + $item }}</th>
                                <td class="max-w-xs overflow-hidden text-ellipsis">{{ $value->title }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('post.edit', $value->id) }}"
                                            class="btn btn-square btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('post.destroy', $value->id) }}"
                                            onclick="destroyExtra(event, this)"
                                            class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                                data-title="{{ $value->title }}"></i></a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">Tidak Ada Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>

    </div>
@endsection
