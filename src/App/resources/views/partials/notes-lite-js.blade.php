@php
    //php here
@endphp
<script>
    $(document).ready(function () {
        $("{{ $notes['selector'] or "#summernote" }}").summernote({
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            airMode: {{ $notes['airmode'] or 'false' }},
            focus: {{ $notes['focus'] or 'true' }},
            placeholder: "{{ $notes['placeholder'] or "Write Your Notes..." }}",
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>
