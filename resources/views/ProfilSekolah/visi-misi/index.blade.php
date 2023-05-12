@extends('layouts.app', ['title' => 'Visi Misi'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Profil Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Visi & Misi</h1>
                </div>
            </div>

            <div class="card bg-white p-8 my-5">
                <form action="#">

                    <div class="mb-1 flex flex-row items-center justify-between">
                        <h1 class="text-xl font-bold">Visi</h1>
                    </div>
                    <div class="divider my-0 mb-3"></div>

                    <div class="form-control">
                        <label for="#" class="appearance-none">Masukkan Visi Sekolah</label>
                        <div class="flex relative w-full items-center mt-3">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-bullseye"></i>
                            </span>
                            <input type="text" class="input input-bordered w-full laptop:w-3/5 pl-11 dark:bg-white"
                                placeholder="Visi Sekolah" name="school_vision" value="{{ $visiMisi->school_vision }}">
                        </div>
                    </div>
                    <div class="mt-3 flex flex-row items-center justify-between">
                        <h1 class="text-xl font-bold">Misi</h1>
                    </div>
                    <div class="divider my-0 mt-3"></div>
                    <div class="form-control mb-4 mt-3">
                        <label for="#" class="appearance-none mb-3">Masukkan Misi Sekolah</label>
                        {{-- <div class="flex relative w-full items-center mt-3">
                            <span class="absolute left-4">
                                <i class="fa-solid fa-bullseye"></i>
                            </span>
                            <input type="text" class="input input-bordered w-full laptop:w-2/5 pl-11 dark:bg-white"
                                placeholder="Misi Sekolah" name="school_vision" value="">
                        </div> --}}

                        <x-editor.ckeditor name="school_mission" id="misi-sekolah" class="ck-content">
                            {{ $visiMisi->school_mission }}
                        </x-editor.ckeditor>
                    </div>

                    <div class="flex flex-row items-center justify-end">
                        <button class="btn flex items-center gap-2">
                            <span>
                                <i class="fa-solid fa-floppy-disk"></i>
                            </span>
                            SIMPAN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
