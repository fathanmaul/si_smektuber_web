@extends('layouts.app', ['title' => 'Prestasi'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Prestasi
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Daftar Prestasi</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Prestasi - prestasi yang telah dicapai</h5>
                </div>
            </div>
            <div class="card bg-white p-5 my-4">
                {{-- @if (session('flash'))
                    @component('components.alert')
                        @slot('type')
                            {{ session('flash')['type'] }}
                        @endslot

                        @slot('message')
                            {{ session('flash')['message'] }}
                        @endslot
                    @endcomponent
                @endif --}}
                <x-alert />
                <div class="w-full flex flex-row items-center gap-4 mb-4 @if (session('flash')) mt-6 @endif">
                    <div class="flex relative w-full items-center leading-[28px]">
                        <span class="absolute left-4"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="w-full h-[40px] py-5 pl-10 border-2 rounded-lg outline-none bg-slate-100 text-slate-800" placeholder="Cari Prestasi">
                    </div>
                    {{-- <input type="text" id="input-search"
                        class="input border-slate-500 font-thin decoration-inherit w-full" placeholder="Cari Prestasi"> --}}
                    <button class="btn flex flex-row items-center gap-2">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <span class="hidden laptop:block">Cari</span>
                    </button>

                </div>
                <div class="flex flex-row items-center w-full 
                 mb-6">
                    <a href="{{ route('prestasi.create') }}"
                        class="btn flex flex-row items-center gap-2 justify-center w-full laptop:w-auto"><span><i
                                class="fa-solid fa-plus"></i></span>Tambah</a>
                </div>
                {{-- <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class=""></th>
                                <th class="w-[300px]">Nama Prstasi</th>
                                <th class="w-1/6 text-center">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="overflow-hidden text-ellipsis w-[300px]">1st Place Mukbang Video Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ea ab ad quibusdam, ducimus autem enim optio eum quae quia perspiciatis dolorum vero officiis, sequi, incidunt laudantium est suscipit quasi!</td>
                                <td class="w-full flex flex-row gap-3 justify-center">
                                    <a href="#" class="btn"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                    <a href="" class="btn btn-error text-white"><span><i class="fa-solid fa-trash"></i></span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}


                <div class="overflow-x-auto">
                    <table class="table w-full mb-4">
                        <thead>
                            <tr>
                                <th class="">No</th>
                                <th class="w-[75%]">Nama Prestasi</th>
                                <th class="w-[20%] text-center ">Edit / Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($achievement as $key => $achievements)
                                <tr>
                                    <th class="border px-4 py-2">{{ $achievement->firstItem() + $key }}</th>
                                    <td class="border px-4 py-2 max-w-xs overflow-hidden text-ellipsis">
                                        {{ $achievements->title }}</td>
                                    <td class="w-full flex flex-row gap-3 justify-center">
                                        <div class="tooltip" data-tip="Lihat Foto">
                                            <a target="_blank"
                                                href="
                                            @if ($achievements->photo != null) {{ asset('storage/' . $achievements->photo) }}
                                            @else
                                            https://www.google.com @endif
                                            "
                                                class="btn btn-sm btn-success text-white"><i
                                                    class="fa-solid fa-image"></i></a>
                                        </div>
                                        <div class="tooltip" data-tip="Edit Prestasi">
                                            <a href="{{ route('prestasi.edit', [$achievements->id])}}"
                                                class="btn btn-sm"><span><i
                                                        class="fa-solid fa-pen-to-square"></i></span></a>
                                        </div>
                                        <div class="tooltip" data-tip="Hapus Prestasi">
                                            <a href="{{ route('prestasi.destroy', $achievements->id) }}"
                                                onclick="deleteModal(event, this)" class="btn btn-sm btn-error text-white"
                                                data-nama="{{ $achievements->title }}"><span><i
                                                        class="fa-solid fa-trash"></i></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="w-full">
                        {{ $achievement->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <form class="modal-box" method="POST">
            @csrf
            @method('DELETE')
            <h3 class="font-bold text-lg">Yakin ingin menghapus Prestasi ini?</h3>
            <div class="pt-4">
                <p class="">Prestasi :</p>
                <p class="" id="delete-title"></p>
            </div>
            <div class="modal-action">
                <label for="my-modal" class="btn">BATAL</label>
                <button class="btn btn-error text-white" type="submit">HAPUS</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        function deleteModal(event, props) {
            event.preventDefault();
            const url = props.getAttribute('href');
            const title = props.getAttribute('data-nama');
            const modal = document.querySelector('.modal');
            const modalToggle = document.querySelector('input#my-modal');
            modalToggle.checked = true;
            modal.querySelector('form.modal-box').setAttribute('action', url);
            document.querySelector('#delete-title').innerHTML = title;
        }
    </script>
@endsection
