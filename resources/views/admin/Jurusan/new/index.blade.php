@extends('admin.layouts.new.app', ['title' => 'Daftar Jurusan'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Daftar Jurusan
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Jurusan / Daftar Jurusan
            </h3>
        </div>
    </div>

    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        <x-alert />

        <form action="{{ route('jurusan.index') }}" method="GET">
            <div class="flex flex-col lg:flex-row items-center gap-2">
                <div class="flex relative w-full items-center">
                    <span class="absolute left-4 text-gray-900">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text"
                        class="input input-bordered 
                        @error('school_email')
                        input-error
                        @enderror w-full px-11 dark:bg-white"
                        placeholder="Cari Jurusan" name="cari"
                        @if (request()->has('cari')) value="{{ request()->cari }}"
                            @else
                            value="" @endif>
                    <span class="absolute right-2 text-gray-900">
                        <button class="btn btn-sm text-sm" type="submit">Cari</button>
                    </span>
                </div>
                <a href="{{ route('jurusan.create') }}" class="btn btn-success text-white flex gap-2 w-full lg:w-fit">
                    <span>
                        <i class="fa-solid fa-plus"></i>
                    </span>
                    Jurusan
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
                        <th style="width: 75%">Nama Jurusan</th>
                        <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($jurusan)
                        @foreach ($jurusan as $item => $value)
                            <!-- row 1 -->
                            <tr>
                                <th>{{ $jurusan->firstItem() + $item }}</th>
                                <td class="max-w-xs overflow-hidden text-ellipsis">{{ $value->major_name }}</td>
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('jurusan.edit', $value->id) }}"
                                            class="btn btn-square btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('jurusan.destroy', $value->id) }}"
                                            onclick="destroyMajor(event, this)"
                                            class="btn btn-square btn-sm btn-error text-white"><i class="fa-solid fa-trash"
                                                data-title="{{ $value->major_name }}"></i></a>

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
            {{ $jurusan->links() }}
        </div>
        <!-- The button to open modal -->



    </div>
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <form class="modal-box" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus jurusan ini?</h3>
            <p class="py-4">Prestasi yang dimiliki oleh jurusan ini akan otomatis terhapus!</p>
            <div class="modal-action">
                <label for="my-modal" class="btn">KEMBALI</label>
                <button class="btn btn-outline btn-error" type="submit" id="button_close">HAPUS</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        function destroyMajor(event, props) {
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
