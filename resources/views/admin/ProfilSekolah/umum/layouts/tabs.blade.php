<div class="tabs">
    <a class="tab tab-bordered {{ request()->segment(3) == 'umum' && request()->segment(4) == null ? 'tab-active' : '' }}" href="{{ route('sekolah.umum') }}">Profil</a>
    <a class="tab tab-bordered {{ request()->segment(3) == 'umum' && request()->segment(4) == 'kontak' ? 'tab-active' : '' }}" href="{{ route('sekolah.kontak') }}">Kontak</a>
    {{-- <a class="tab tab-bordered">Foto</a> --}}
</div>