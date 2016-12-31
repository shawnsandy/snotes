@php
    // php here
@endphp
<script>

    $(document).ready(function () {
        var el = "{{ $notes['selector'] or "#adv-notes" }}";
        $(el).summernote({
            placeholder: 'Text here',
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            focus: {{ $notes['focus'] or 'true' }},
            airMode: true,
            focus: {{ $notes['focus'] or 'true' }}
        });
    });

</script>
