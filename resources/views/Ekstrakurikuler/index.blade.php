@extends('layouts.app', ['title' => 'Ekstrakurikuler'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Ekstrakurikuler
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Ekstrakurikuler</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Daftar ekstrakurikuler yang tersedia</h5>
                </div>
            </div>
            <div class="card bg-white p-6 my-4">
                <x-alert />
                <div class="w-full flex flex-row items-center gap-4 mb-4 @if (session('flash')) mt-6 @endif">
                    <div class="flex relative w-full items-center">
                        <span class="absolute left-4"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text"
                            class="w-full h-[40px] py-[1.40rem] pl-10 border-2 rounded-lg outline-none  text-slate-800 transition-all ease-in-out duration-300 hover:shadow-lg focus:shadow-lg"
                            placeholder="Cari Jurusan">
                    </div>

                    {{-- <input type="text" id="input-search"
                        class="input border-slate-500 font-thin decoration-inherit w-full" placeholder="Cari Prestasi"> --}}
                    <button class="btn flex flex-row items-center gap-2">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span class="hidden laptop:block">Cari</span>
                    </button>
                    <a href="" class="btn btn-success text-white flex flex-row items-center gap-2">
                        <span>
                            <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="hidden laptop:block">Tambah</span>
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="table w-full mb-4">
                        <thead>
                            <tr>
                                <th class="">No</th>
                                <th class="w-[75%]">Nama Ekstrakurikuler</th>
                                <th class="w-[20%] text-center ">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($extracurricular as $key => $item)
                                <tr>
                                    <th>
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td class="flex flex-row justify-center items-center gap-2">
                                        <button class="btn btn-sm">
                                            <span>
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </span>
                                        </button>
                                        <div class="tooltip" data-tip="Hapus Ekstrakurikuler">
                                            <a href="{{ route('ekstrakurikuler.destroy', $item->id) }}"
                                                onclick="deleteModal(event, this)" class="btn btn-sm btn-error text-white"
                                                data-nama="{{ $item->name }}"><span><i class="fa-solid fa-trash"></i></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="delete-modal" class="modal-toggle" />
        <div class="modal">
            <form class="modal-box" method="POST">
                @csrf
                @method('DELETE')
                <h3 class="font-bold text-lg">Yakin ingin menghapus Ekstrakurikuler ini?</h3>
                <div class="pt-4">
                    <p class="" id="delete-title"></p>
                </div>
                <div class="modal-action">
                    <label for="my-modal" onclick="closeModal()" class="btn">BATAL</label>
                    <button class="btn btn-error text-white" type="submit" id="submit-delete"
                        onclick="closeModal()">HAPUS</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteModal(event, props) {
            try {
                event.preventDefault();
                const modalDelete = document.querySelector('#delete-modal');
                modalDelete.checked = true;
                const url = props.getAttribute('href');
                const title = props.getAttribute('data-nama');
                const modal = document.querySelector('.modal');
                modal.querySelector('form.modal-box').setAttribute('action', url);
                modal.querySelector('#delete-title').innerHTML = 'Ekstrakurikuler : '+title;
            } catch (error) {
                console.log(error);
            }
        }

        function closeModal() {
            try {
                const modalDelete = document.querySelector('#delete-modal');
                modalDelete.checked = false;
            } catch (error) {
                console.log(error);
            }
        }
    </script>
@endsection
