<div>
    <textarea id="{{ $id }}" {{ $attributes }}>{{ $slot }}</textarea>
</div>

@section('script')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(function () {
            let ckeditorElement = document.getElementById('{{ $id }}');
            // console.log(ckeditorElement);
            CKEDITOR.replace(ckeditorElement)
            // CKEDITOR.config.customConfig = "{{ asset('vendor/ckeditor/config.js') }}";
            CKEDITOR.config.customConfig = "{{ asset('vendor/ckeditor/config/full-config.js') }}"
        });
    </script>
@endsection
