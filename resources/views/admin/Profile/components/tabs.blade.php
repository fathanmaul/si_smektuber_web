@php
    $route = Route::currentRouteName();
@endphp
<div class="tabs">
    <a class="tab tab-bordered {{ $route == 'akun.index' ? 'tab-active' : '' }}" href="{{ route('akun.index') }}">Profil</a>
    <a class="tab tab-bordered {{ $route == 'akun.password.edit' ? 'tab-active' : '' }}" href="{{ route('akun.password.edit') }}">Password</a>
    {{-- <a class="tab tab-bordered">Foto</a> --}}
</div>