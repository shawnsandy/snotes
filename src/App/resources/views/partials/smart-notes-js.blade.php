@php
    // php here
@endphp
<script>

    $(document).ready(function () {
        var el = "{{ $notes['selector'] or "#adv-notes" }}";
        $(el).summernote({
            placeholder: 'Now add some details here...',
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            focus: {{ $notes['focus'] or 'true' }},
            airMode: true,
            focus: {{ $notes['focus'] or 'true' }}
        });
        $('#insertImg').click(function(e){
            e.preventDefault();
            var src = 'https://images.unsplash.com/photo-1469536526925-9b5547cd5d68?dpr=1&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop="); width: 1176px; height: 783px;';
            $(el).summernote('insertImage', src);

            console.log('image insert')
        });


    });



</script>
