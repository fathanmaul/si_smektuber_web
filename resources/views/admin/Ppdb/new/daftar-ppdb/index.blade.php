@extends('admin.layouts.new.app', ['title' => 'Daftar PPDB'])
@php
    use Carbon\Carbon;
@endphp

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar PPDB (Penerimaan Peserta Didik Baru)
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / Daftar PPDB
            </h3>
        </div>
    </div>

    <div class="card p-6 rounded bg-white mt-2 drop-shadow-lg">
        <x-alert />
        <form action="{{ route('ppdb.daftar.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Cari berdasarkan tahun ajaran..." name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('ppdb.daftar.create') }}"
                    class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    PPDB
                </a>
            </div>
        </form>
        <div class="my-4">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th style="width: 3%">NO</th>
                            <th style="width: 25%">Tahun Ajaran</th>
                            <th style="width: 25%">Dibuat pada</th>
                            <th class="w-[20%]">Status</th>
                            <th style="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $index => $registration)
                            <tr>
                                <td>{{ $registrations->firstItem() + $index }}</td>
                                <td>{{ $registration->schoolYear->school_year ?? '' }}</td>
                                <td>{{ Carbon::parse($registration->created_at)->translatedFormat('d F Y - H:i') }}</td>
                                <td>
                                    @if ($registration->status == 1)
                                        <div class="badge badge-success text-white">Aktif</div>
                                    @else
                                        <div class="badge badge-error text-white">Tidak Aktif</div>
                                    @endif
                                </td>
                                <td>
                                    @if ($registration->status == 0)
                                    <div class="tooltip" data-tip="Aktifkan">
                                        <a href="{{ route('ppdb.daftar.status', $registration->id) }}" class="btn btn-square btn-sm btn-success text-white" onclick="updateStatus(event, this)">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </a>
                                    </div>
                                    @else
                                    <div class="tooltip" data-tip="Nonaktifkan">
                                        <a href="{{ route('ppdb.daftar.status.false', $registration->id) }}" class="btn btn-square btn-sm btn-error text-white" onclick="updateStatusFalse(event, this)">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </a>
                                    </div>
                                    @endif
                                    <a href="{{ route('ppdb.daftar.edit', $registration->id) }}"
                                        class="btn btn-square btn-sm btn-warning text-white">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="{{ route('ppdb.daftar.destroy', $registration->id) }}"
                                        onclick="destroySchoolYear(event, this)"
                                        class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                            data-title="{{ $registration->tahun_ajaran }}"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $registrations->links() }}
                </div>

            </div>
        </div>
    </div>
    {{-- !-- Put this part before </body> tag --> --}}
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal modal-delete">
        <form class="modal-box rounded" id="modal-box-delete" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus PPDB pada Tahun Ajaran ini?</h3>
            <div class="modal-action">
                <label for="my-modal" class="btn rounded">KEMBALI</label>
                <button class="btn btn-outline btn-error rounded" type="submit" id="button_close">HAPUS</button>
            </div>
        </form>
    </div>

    <input type="checkbox" class="modal-toggle" id="my-modal-update"/>
    <div class="modal modal-update">
        <form class="modal-box rounded" id="modal-box-update" method="POST">
            @csrf
            @method('PUT')
            <h3 class="font-bold text-lg">Yakin ingin mengaktifkan PPDB pada Tahun Ajaran ini?</h3>
            <p>Jika ada PPDB yang sedang aktif / berjalan, maka akan otomatis di nonaktifkan!</p>
            <div class="modal-action">
                <label for="my-modal-update" class="btn rounded">KEMBALI</label>
                <button class="btn btn-success text-white rounded" type="submit" id="button_close_1">AKTIFKAN</button>
            </div>
        </form>
    </div>

    <input type="checkbox" class="modal-toggle" id="my-modal-update-false"/>
    <div class="modal modal-update-false">
        <form class="modal-box rounded" id="modal-box-update-false" method="POST">
            @csrf
            @method('PUT')
            <h3 class="font-bold text-lg">Yakin ingin menonaktifkan PPDB pada Tahun Ajaran ini?</h3>
            <div class="modal-action">
                <label for="my-modal-update-false" class="btn rounded">KEMBALI</label>
                <button class="btn btn-error text-white rounded" type="submit" id="button_close_1">NON AKTIFKAN</button>
            </div>
        </form>
    </div>

    {{-- <input type="checkbox" class="modal-toggle" id="my-modal-1">
    <div class="modal">
        <form class="modal-box rounded "></form>
    </div> --}}
@endsection

@section('script')
    <script>
        function destroySchoolYear(event, props) {
            const modalToggle = document.querySelector('input#my-modal');
            event.preventDefault();
            const url = props.getAttribute('href');
            const title = props.getAttribute('data-title');
            const modal = document.querySelector('.modal-delete');
            modalToggle.checked = true;
            modal.querySelector('#modal-box-delete').setAttribute('action', url);
        }

        document.querySelector('#button_close').addEventListener('click', function() {
            const modalToggle = document.querySelector('input#my-modal');
            modalToggle.checked = false;
        });
        
        function updateStatus(event, props) {
            const modalToggle = document.querySelector('input#my-modal-update');
            event.preventDefault();
            const url = props.getAttribute('href');
            const modal = document.querySelector('.modal-update');
            modalToggle.checked = true;
            modal.querySelector('#modal-box-update').setAttribute('action', url);
        }
        document.querySelector('#button_close_1').addEventListener('click', function() {
            const modalToggle = document.querySelector('input#my-modal-update');
            modalToggle.checked = false;
        });

        function updateStatusFalse(event, props) {
            const modalToggle = document.querySelector('input#my-modal-update-false');
            event.preventDefault();
            const url = props.getAttribute('href');
            const modal = document.querySelector('.modal-update-false');
            modalToggle.checked = true;
            modal.querySelector('#modal-box-update-false').setAttribute('action', url);
        }
        document.querySelector('#button_close_1').addEventListener('click', function() {
            const modalToggle = document.querySelector('input#my-modal-update-false');
            modalToggle.checked = false;
        });
        </script>
@endsection
