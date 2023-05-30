@extends('admin.layouts.new.app', ['title' => 'Tahun Ajaran'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar Tahun Ajaran
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                PPDB / Tahun Ajaran
            </h3>
        </div>
    </div>

    <div class="card p-6 rounded bg-white drop-shadow-lg">
        <x-alert />

        <a href="{{ route('ppdb.tahun_ajaran.create') }}" class="btn btn-success flex flex-row gap-2 w-full text-white lg:w-fit ">
            <i class="fa-solid fa-plus"></i>
            Tambah
        </a>
        <div class="overflow-x-auto mt-4">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th style="width: 5%">NO</th>
                        <th style="width: 75%">Tahun Ajaran</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($tahun_ajaran)
                        @foreach ($tahun_ajaran as $item => $value)
                            <!-- row 1 -->
                            <tr>
                                <th>{{ $tahun_ajaran->firstItem() + $item }}</th>
                                <td class="max-w-xs overflow-hidden text-ellipsis">{{$value->school_year}}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('ppdb.tahun_ajaran.edit', $value->id) }}"
                                            class="btn btn-square btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('ppdb.tahun_ajaran.destroy', $value->id) }}"
                                            onclick="destroySchoolYear(event, this)"
                                            class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                                data-title="{{ $value->tahun_ajaran }}"></i></a>
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
            <div class="mt-3 hidden lg:block">
                {{ $tahun_ajaran->links() }}
            </div>
            <div class="mt-3 block lg:hidden">
                {{ $tahun_ajaran->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <form class="modal-box rounded" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus Tahun Ajaran ini?</h3>
            <p class="py-4">Seluruh informasi PPDB Tahun Ajaran ini seperti <strong>Poster PPDB</strong> dan <strong>Data Pendaftar</strong> akan ikut terhapus!</p>
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
