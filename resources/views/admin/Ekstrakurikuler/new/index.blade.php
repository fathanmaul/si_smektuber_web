@extends('admin.layouts.new.app', ['title' => 'Ekstrakurikuler'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar Ekstrakurikuler
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Ekstrakurikuler / Daftar Ekstrakurikuler
            </h3>
        </div>
    </div>

    <div class="card rounded p-6 drop-shadow-lg bg-white">
        <x-alert />

        <form action="{{ route('ekstrakurikuler.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text"
                        class="input input-bordered w-full px-11 dark:bg-white"
                        placeholder="Cari Ekstrakurikuler" name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('ekstrakurikuler.create') }}" class="btn btn-success text-white flex gap-2 w-full lg:w-fit items-center">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    Ekstra
                </a>
            </div>
        </form>
        @error('major_search')
            <div class="text-xs text-red-500 mt-1 w-full">{{ $message }}</div>
        @enderror
        <div class="overflow-x-auto mt-4">
            <table class="table table-zebra w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th style="width: 5%">NO</th>
                        <th style="width: 75%">Nama Ekstrakurikuler</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($extracurricular)
                        @foreach ($extracurricular as $item => $value)
                            <!-- row 1 -->
                            <tr>
                                <th>{{ $extracurricular->firstItem() + $item }}</th>
                                <td class="max-w-xs overflow-hidden text-ellipsis">{{ $value->extracurricular_name }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('ekstrakurikuler.edit', $value->id) }}"
                                            class="btn btn-square btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('ekstrakurikuler.destroy', $value->id) }}"
                                            onclick="destroyExtra(event, this)"
                                            class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                                data-title="{{ $value->extracurricular_name }}"></i></a>

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
            {{ $extracurricular->links() }}
        </div>
    </div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <form class="modal-box rounded" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus ekstrakurikuler ini?</h3>
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
        function destroyExtra(event, props) {
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