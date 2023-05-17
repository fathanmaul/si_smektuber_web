@extends('admin.layouts.new.app', ['title' => 'Daftar PPDB'])

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
            <div class="overflow-x-auto mt-4">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th style="width: 3%">NO</th>
                            <th style="width: 400px">Tahun Ajaran</th>
                            <th style="width: 400px">Dibuat pada</th>
                            <th style="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $index => $registration)
                            <tr>
                                <td>{{ $registrations->firstItem() + $index }}</td>
                                <td>{{ $registration->schoolYear->school_year }}</td>
                                <td>{{ $registration->created_at }}</td>
                                <td>
                                    <a href="{{ route('ppdb.daftar.edit', $registration->id) }}"
                                        class="btn btn-square btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    {{-- <form action="{{ route('ppdb.daftar.destroy', $registration->id) }}"
                                        method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form> --}}
                                    <a href="{{ route('ppdb.daftar.destroy', $registration->id) }}"
                                        onclick="destroySchoolYear(event, this)"
                                        class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                            data-title="{{ $registration->tahun_ajaran }}"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    {{-- !-- Put this part before </body> tag --> --}}
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <form class="modal-box rounded" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus Tahun Ajaran ini?</h3>
            {{-- <p class="py-4">Prestasi yang dimiliki oleh ekstrakurikuler ini akan otomatis terhapus!</p> --}}
            <div class="modal-action">
                <label for="my-modal" class="btn rounded">KEMBALI</label>
                <button class="btn btn-outline btn-error rounded" type="submit" id="button_close">HAPUS</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
<script>
    function destroySchoolYear(event, props) {
        const modalToggle = document.querySelector('input#my-modal');
        event.preventDefault();
        const url = props.getAttribute('href');
        const title = props.getAttribute('data-title');
        const modal = document.querySelector('.modal');
        modalToggle.checked = true;
        modal.querySelector('form.modal-box').setAttribute('action', url);
    }

    document.querySelector('#button_close').addEventListener('click', function() {
        const modalToggle = document.querySelector('input#my-modal');
        modalToggle.checked = false;
    });
</script>
@endsection
