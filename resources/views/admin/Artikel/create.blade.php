@extends('admin.layouts.new.app', ['title' => 'Tambah Artikel'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Tambah Artikel
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Artikel / <a href="{{ route('artikel.index') }}" class="hover:underline">Daftar Artikel</a> / Tambah
                Artikel
            </h3>
        </div>
    </div>
    <div class="card p-6 bg-white rounded drop-shadow-lg mt-4">
        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="form-control gap-2">
                    <label for="" class="appearance-none">Judul Artikel</label>
                    <input type="text" name="title" id="title" class="input input-bordered @error('title') input-error @enderror"
                        placeholder="Masukkan Judul Post" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control gap-2 mt-3">
                    <label for="content" class="appearance-none">Isi Artikel</label>
                    <x-editor.ckeditor name="content" id="content" class="ck-content">
                        @if (old('content'))
                            {{ old('content') }}
                        @endif
                    </x-editor.ckeditor>
                    @error('content')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-control gap-2 mt-3">
                    <label for="thumbnail" class="appearance-none">Thumbnail (Maksimal Ukuran 1MB | Format : jpg, jpeg,
                        png)</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="file-input file-input-bordered @error('thumbnail') file-input-error @enderror">
                    @error('thumbnail')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center justify-end gap-3 mt-8 lg:mt-4">
                <a href="{{ route('artikel.index') }}" class="btn btn-outline btn-error w-full lg:w-fit">BATAL</a>
                <button type="submit" class="btn w-full lg:w-fit">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection

@section('script')

@endsection
