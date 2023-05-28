@extends('admin.layouts.new.app', ['title' => 'Edit Artikel'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full lg:w-3/5 px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-2xl lg:text-3xl font-bold text-white">
                Ubah Artikel
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Artikel / <a href="{{ route('artikel.index') }}" class="hover:underline">Daftar Artikel</a> / Ubah
                Artikel
            </h3>
        </div>

    </div>
    <div class="card p-6 bg-white rounded drop-shadow-lg mt-4">
        <form action="{{ route('artikel.put', $artikel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div class="form-control gap-2">
                    <label for="" class="appearance-none">Judul Artikel</label>
                    <input type="text" name="title" id="title"
                        class="input input-bordered @error('title') input-error @enderror" placeholder="Masukkan Judul Post"
                        @if (old('title')) 
                        value="{{ old('title') }}"
                        @else 
                        value="{{ $artikel->title }}"
                        @endif>
                    @error('title')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control gap-2 mt-3">
                    <label for="content" class="appearance-none">Isi Artikel</label>
                    <x-editor.ckeditor_full name="content" id="content" class="ck-content">
                        @if (old('content'))
                            {{ old('content') }}
                        @else
                            {!! $artikel->description !!}
                        @endif
                    </x-editor.ckeditor_full>
                    @error('content')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-control gap-2 mt-3">
                    <p>Thumbnail Sebelumnya : </p>
                    @if ($artikel->thumbnail)
                    <div class="w-full lg:w-1/3">
                        <img src="{{ url('storage/app/public/' . $artikel->thumbnail) }}" alt=""/>
                    </div>
                    @else
                        <p class="text-sm text-gray-600">Thumbnail tidak tersedia!</p>
                    @endif
                    <label for="thumbnail" class="appearance-none mt-4">Upload Thumbnail Baru (Maksimal Ukuran 1MB | Format : jpg, jpeg,
                        png)</label>
                    <input type="file" name="thumbnail" id="thumbnail"
                        class="file-input file-input-bordered @error('thumbnail') file-input-error @enderror">
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
