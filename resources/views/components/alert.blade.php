@if (session()->has('flash'))
    <div @class([
        'p-4 text-md rounded-lg',
        'text-red-800 bg-red-50' => session('flash')['type'] == 'danger',
        'text-yellow-800 bg-yellow-50' => session('flash')['type'] == 'warning',
        'text-green-800 bg-green-50' => session('flash')['type'] == 'success',
    ])>
        <span class="text-base">{{ session('flash')['message'] ?? '' }}</span>
    </div>
@endif

{{-- <div class="alert {{ $type ? 'alert-' . $type : '' }} shadow-lg">
    <div>
        <span>
            @if ($type == 'error')
                <i class="fa-solid fa-circle-xmark"></i>
            @elseif ($type == 'warning')
                <i class="fa-solid fa-circle-exclamation"></i>
            @elseif ($type == 'success')
                <i class="fa-solid fa-circle-check"></i>
            @else
                <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
            @endif
        </span>
        <span>{{ $message ?? ''}}</span>
    </div>
</div> --}}
