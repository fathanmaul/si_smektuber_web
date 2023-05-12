@extends('admin.layouts.app', ['title' => 'Tambah Prestasi'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                <a href="{{ route('prestasi.index') }}" class="hover:underline">Prestasi</a> / Tambah Prestasi
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Tambah Prestasi</h1>
                </div>
                <div class="mt-3">
                    <h5 class=" text-md laptop:text-lg text-white">Masukkan Prestasi yang sudah dicapai di bawah ini</h5>
                </div>
            </div>
            <div class="card my-4 bg-white p-5">
                <form method="POST" action="{{ route('prestasi.store') }}" class="flex flex-col" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control mb-4">
                        <label for="name" class="label">Nama Prestasi</label>
                        <input type="text" name="name" id="name" class="input input-bordered w-full laptop:w-1/2
                        @error('name')
                            input-error
                        @enderror
                        "
                            placeholder="Masukkan Nama Prestasi" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-control mb-4">
                        <label for="#" class="label">Deskripsi</label>
                        <textarea name="achievement_description" class="border-sky-900 border">{{ old('achievement_description') }}</textarea>
                        @error('achievement_description')
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-control mb-7   ">
                        <label for="#" class="label">Foto</label>
                        <input type="file" class="file-input file-input-bordered @error('achievement_image') file-input-error @enderror w-full laptop:w-1/3"
                            accept="image/png, image/jpg, image/jpeg" name="achievement_image" />
                        <p class="ml-1">File yang didukung : png/jpg/jpeg | Ukuran Foto Maksimal 2 MB / 2048KB</p>
                        @error('achievement_image')
                            <p class="text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-control flex flex-row-reverse">
                        <button class="btn w-full laptop:w-[100px]">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        CKEDITOR.replace('achievement_description');
    </script>
@endsection
