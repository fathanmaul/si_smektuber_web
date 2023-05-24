@extends('admin.layouts.new.app', ['title' => 'Tambah Post'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Tambah Post
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Post / <a href="{{ route('post.index') }}" class="hover:underline">Daftar Post</a> / Tambah
                Post
            </h3>
        </div>
    </div>
    <div class="card p-6 bg-white rounded drop-shadow-lg mt-4">
        <form action="{{ route('post.create') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8">
                <div>
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Judul Post</label>
                        <input type="text" name="title" id="title" class="input input-bordered"
                            placeholder="Masukkan Judul Post">
                    </div>
                    <div class="form-control gap-2 mt-3">
                        <label for="" class="appearance-none">Isi Post / Konten</label>
                        <x-editor.ckeditor name="content" id="content" class="ck-content">
                            @if (old('content'))
                                {{ old('content') }}
                            @endif
                        </x-editor.ckeditor>
                    </div>
                </div>
                <div>
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">Thumbnail (Maksimal Ukuran 1MB | Format : jpg, jpeg, png)</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="file-input file-input-bordered">
                    </div>
                    <div class="form-control gap-2 mt-3">
                        <label for="" class="appearance-none">Gambar 1 (Maksimal Ukuran 1MB | Format : jpg, jpeg, png)</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="file-input file-input-bordered">
                    </div>
                    <div class="form-control gap-2 mt-3">
                        <label for="" class="appearance-none">Gambar 2 (Maksimal Ukuran 1MB | Format : jpg, jpeg, png)</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="file-input file-input-bordered">
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center justify-end gap-3 mt-8 lg:mt-4">
                <a href="{{ route('post.index') }}" class="btn btn-outline btn-error w-full lg:w-fit">BATAL</a>
                <button type="submit" class="btn w-full lg:w-fit">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection
