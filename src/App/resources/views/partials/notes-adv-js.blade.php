@php
    // php here
@endphp
<script>

    $(document).ready(function () {
        var el = "{{ $notes['selector'] or ".adv-notes #adv-notes" }}";
        $(el).summernote({
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            focus: {{ $notes['focus'] or 'true' }},
            airMode: {{ $notes['airmode'] or 'false' }},
            focus: {{ $notes['focus'] or 'true' }}
        });
    });

</script>
