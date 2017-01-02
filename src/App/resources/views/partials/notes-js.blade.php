@php
// php here
@endphp
<script>
    $(document).ready(function() {
        $({{ $notes['selector'] or "#summernote" }}).summernote({
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            focus: {{ $notes['focus'] or 'true' }},
            airMode: {{ $notes['airmode'] or 'false' }},
            focus: {{ $notes['focus'] or 'true' }},
            placeholder: "{{ $notes['placeholder'] or "Write Your Notes..." }}"
        });
    });
</script>
