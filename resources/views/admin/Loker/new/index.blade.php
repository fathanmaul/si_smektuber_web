@extends('admin.layouts.new.app', ['title' => 'Data Lowongan Kerja'])


@php
    use Carbon\Carbon;
@endphp
@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar Lowongan Kerja
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Loker / Daftar Loker
            </h3>
        </div>
    </div>

    <div class="card bg-white p-6 drop-shadow-lg rounded mt-3">
        <x-alert />
        <form action="{{ route('loker.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Nama Lowongan Kerja...." name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('loker.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    Loker
                </a>
            </div>
        </form>
        <div class="overflow-x-auto mt-4">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th style="width: 5%">NO</th>
                        <th style="width: 45%">Nama Lowongan Kerja</th>
                        <th style="width: 20%">Dibuat Pada</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($loker))
                        @foreach ($loker as $item => $value)
                            <!-- row 1 -->
                            <tr>
                                <td>{{ $item + $loker->firstitem() }}</td>
                                <td class="max-w-xs overflow-hidden text-ellipsis">{{ $value->title }}</td>

                                <td>
                                    {{ Carbon::parse($value->created_at)->translatedFormat('d F Y - H:i') }}
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <div class="tooltip" data-tip="Ubah Loker">
                                            <a href="{{ route('loker.edit', $value->id) }}"
                                                class="btn btn-square btn-sm btn-warning text-white flex items-center justify-center">
                                                <i class="fa-solid fa-edit"></i>
                                            </a>
                                        </div>

                                        <div class="tooltip" data-tip="Hapus Loker">
                                            {{-- <a href="{{ route('loker.destroy', $value->id) }}"
                                                class="btn btn-delete btn-square btn-sm btn-error text-white flex items-center justify-center"
                                                onclick="destroyArticle(event, this)">
                                                <i class="fa-solid fa-trash"></i>
                                            </a> --}}
                                            <button
                                                class="btn btn-delete btn-square btn-sm btn-error text-white flex items-center justify-center"
                                                data-url="{{ route('loker.destroy', $value->id) }}" id="btn-delete" onclick="showModalDestroy(this)">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="mt-4">
                {{ $loker->links() }}
            </div>
        </div>
    </div>


    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="destroy-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box rounded">
            <form method="post" class="my-0">
                @csrf
                @method('DELETE')
                <h3 class="font-bold text-lg">Yakin ingin menghapus Lowongan Kerja ini?</h3>


                <div class="modal-action">
                    <label for="destroy-modal" class="btn">BATAL</label>
                    <button type="button" class="btn btn-error btn-outline" id="btn-submit">HAPUS</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function showModalDestroy(props) {
            const modalToggle = document.querySelector('input#destroy-modal');
            modalToggle.checked = true;
            const url = props.getAttribute('data-url');
            const formModalDestroy = document.querySelector('.modal .modal-box form');
            formModalDestroy.setAttribute('action', url);
        }
        const btnSubmit = document.querySelector('button#btn-submit');
        btnSubmit.addEventListener('click', function(e) {
            e.preventDefault();
            const formModalDestroy = document.querySelector('.modal .modal-box form');
            formModalDestroy.submit();
        })
    </script>
@endsection
