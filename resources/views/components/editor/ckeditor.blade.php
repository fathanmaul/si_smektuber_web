<div>
    <textarea id="{{ $id }}" {{ $attributes }}>{{ $slot }}</textarea>
</div>

@section('script')
    <script src="{{ getAsset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        $(function () {
            let ckeditorElement = document.getElementById('{{ $id }}');
            // console.log(ckeditorElement);
            CKEDITOR.replace(ckeditorElement)
            CKEDITOR.config.customConfig = "{{ getAsset('vendor/ckeditor/config.js') }}";
            
        });
    </script>
@endsection
