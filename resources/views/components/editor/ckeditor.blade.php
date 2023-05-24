<div>
    <textarea id="{{ $id }}" {{ $attributes }}>{{ $slot }}</textarea>
</div>

@section('script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            let ckeditorElement = document.getElementById('{{ $id }}');
            // console.log(ckeditorElement);
            CKEDITOR.replace(ckeditorElement)
            CKEDITOR.config.customConfig = "{{ asset('vendor/ckeditor/config.js') }}";
            
        });
    </script>
@endsection
