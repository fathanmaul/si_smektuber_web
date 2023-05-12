@extends('layouts.app', ['title' => 'Informasi Umum'])

@section('content')
    <div id="content" onclick="closeSidebar()">
        <div class="container mx-auto flex flex-col w-full pt-4 px-8 min-h-screen">
            <div class="pb-2 text-slate-100">
                Informasi Sekolah
            </div>
            <div class="flex flex-col">
                <div class="">
                    <h1 class="text-2xl laptop:text-4xl text-white font-bold">Informasi Umum</h1>
                </div>
                {{-- <div class="mt-3">
            <h5 class=" text-md laptop:text-lg text-white">Selayang Pandang sekolah</h5>
        </div> --}}
            </div>

            <div class="card bg-white p-8 my-5">
                @include('ProfilSekolah.umum.layouts.tabs')
                <x-alert />
                <form action="{{ route('sekolah.kontak.put') }}" method="POST" class="">
                    @csrf
                    <div class="py-4">
                        <h1 class="text-xl font-bold">Kontak & Sosial Media</h1>
                    </div>
                    <div class="divider my-0 h-0 mb-4"></div>
                    <div class="grid grid-cols-1 laptop:grid-cols-3 gap-4 w-full">
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">Email </label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <input type="text"
                                        class="input input-bordered @error('school_email')
                                        input-error
                                    @enderror w-full pl-11 dark:bg-white"
                                        placeholder="Email Sekolah" name="school_email" value="{{ $kontak->school_email }}">
                                </div>
                                @error('school_email')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">Telepon</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_phone')
                                        input-error
                                    @enderror w-full pl-11 dark:bg-white"
                                        placeholder="Telepon Sekolah" name="school_phone"
                                        value="{{ $kontak->school_phone }}">
                                </div>
                                @error('school_phone')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">WhatsApp (contoh: 628123456789)</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_whatsapp')
                                        input-error
                                    @enderror w-full pl-10 dark:bg-white"
                                        placeholder="62812345678" name="school_whatsapp"
                                        value="{{ $kontak->school_whatsapp }}">
                                </div>
                                @error('school_whatsapp')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">URL Facebook<br> (contoh: https://www.facebook.com/flyingcat)</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-brands fa-facebook"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_facebook')
                                        input-error
                                    @enderror w-full pl-10 dark:bg-white"
                                        placeholder="https://www.facebook.com/" name="school_facebook"
                                        value="{{ $kontak->school_facebook }}">
                                </div>
                                @error('school_facebook')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">URL Instagram<br>(contoh: https://www.instagram.com/flyingcatx)</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_instagram')
                                        input-error
                                    @enderror w-full pl-10 dark:bg-white"
                                        placeholder="https://www.instagram.com/" name="school_instagram"
                                        value="{{ $kontak->school_instagram }}">
                                </div>
                                @error('school_instagram')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">URL Twitter<br>(contoh: https://www.twitter.com/flyingcat)</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_twitter')
                                        input-error
                                    @enderror w-full pl-10 dark:bg-white"
                                        placeholder="https://www.twitter.com/" name="school_twitter"
                                        value="{{ $kontak->school_twitter }}">
                                </div>
                                @error('school_twitter')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-control gap-2">
                                <label for="" class="appearance-none">URL Youtube <br>(contoh: https://www.youtube.com/)</label>
                                <div class="flex relative w-full items-center">
                                    <span class="absolute left-4">
                                        <i class="fa-brands fa-youtube"></i>
                                    </span>
                                    <input type="text" class="input input-bordered @error('school_youtube')
                                        input-error
                                    @enderror w-full pl-10 dark:bg-white"
                                        placeholder="ex. https://www.youtube.com/" name="school_youtube"
                                        value="{{ $kontak->school_youtube }}">
                                </div>
                                @error('school_youtube')
                                    <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end w-full mt-4">
                        <button class="btn w-full laptop:w-auto flex flex-row gap-2 items-center" type="submit">
                            <span><i class="fa-solid fa-floppy-disk"></i></span>
                            SIMPAN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
