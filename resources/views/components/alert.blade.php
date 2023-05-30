@if (session()->has('flash'))
    <div @class([
        'p-4 text-md rounded-lg mb-3 flex flex-row gap-3 items-center',
        'alert-danger' => session('flash')['type'] == 'danger',
        'alert-warning' => session('flash')['type'] == 'warning',
        'alert-success' => session('flash')['type'] == 'success',
    ])>
        <span>
            <i @class([
                'fa', 
                'fa-solid fa-circle-check' => session('flash')['type'] == 'success',
                'fa-solid fa-circle-xmark' => session('flash')['type'] == 'danger',
                'fa-solid fa-triangle-exclamation' => session('flash')['type'] == 'warning',
            ])></i>
        </span>
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
