@extends('admin.layouts.new.app', ['title' => 'Informasi Umum'])

@section('content')
    <div class="flex flex-col lg:ml-2 w-full px-4 py-3 lg:px-0 lg:gap-2">
        <div class="flex-1">
            <h1 class="text-xl lg:text-3xl font-bold text-white">
                Informasi Umum
            </h1>
        </div>
        <div class="flex-1">
            <h3 class="text-sm lg:text-md font-normal text-white">
                Informasi Sekolah / Informasi Umum
            </h3>
        </div>
    </div>

    <div class="card rounded-md drop-shadow-lg p-6 bg-white">
        @include('admin.ProfilSekolah.umum.layouts.tabs')
        <x-alert />
        <h2 class="font-bold text-lg {{ session()->has('flash') ? 'mt-0' : 'mt-4' }}">Kontak</h2>
        <div class="divider my-0 h-0 mb-4 mt-4"></div>
        <form action="{{ route('sekolah.kontak.put') }}" method="POST">
            @csrf

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
                            <input type="text"
                                class="input input-bordered @error('school_phone')
                            input-error
                        @enderror w-full pl-11 dark:bg-white"
                                placeholder="Telepon Sekolah" name="school_phone"
                                @if (old('school_phone')) value="{{ old('school_phone') }}"
                                @elseif($kontak->school_phone)
                                    value="{{ $kontak->school_phone }}" @endif>
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
                            <input type="text" onkeypress="return restrictAlpha(event)"
                                class="input input-bordered @error('school_whatsapp')
                            input-error
                        @enderror w-full pl-10 dark:bg-white"
                                placeholder="62812345678" id="school_whatsapp" name="school_whatsapp"
                                @if (old('school_whatsapp')) value="{{ old('school_whatsapp') }}"
                                @else
                                value="{{ $kontak->school_whatsapp }}" @endif>
                        </div>
                        @error('school_whatsapp')
                            <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <div class="form-control gap-2">
                        <label for="" class="appearance-none">URL Facebook<br> (contoh:
                            https://www.facebook.com/flyingcat)</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-brands fa-facebook"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_facebook')
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
                        <label for="" class="appearance-none">URL Instagram<br>(contoh:
                            https://www.instagram.com/flyingcatx)</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-brands fa-instagram"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_instagram')
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
                        <label for="" class="appearance-none">URL Twitter<br>(contoh:
                            https://www.twitter.com/flyingcat)</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_twitter')
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
                        <label for="" class="appearance-none">URL Youtube <br>(contoh:
                            https://www.youtube.com/)</label>
                        <div class="flex relative w-full items-center">
                            <span class="absolute left-4">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                            <input type="text"
                                class="input input-bordered @error('school_youtube')
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
@endsection

@section('script')
    <script type="text/javascript">
        function restrictAlpha(e) {
            var x = e.which || e.keycode;
            if ((x >= 48 && x <= 57))
                return true;
            else
                return false;
        }
    </script>
@endsection
