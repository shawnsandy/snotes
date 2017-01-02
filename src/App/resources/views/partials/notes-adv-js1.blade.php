@php
    // php here
@endphp
<script>
    $(document).ready(function () {
        var el = "{{ $notes['selector'] or "#summernote" }}";
        $(el).summernote({
            minHeight: "{{ $notes['min_height'] or '300px' }}",
            focus: {{ $notes['focus'] or 'true' }},
            airMode: {{ $notes['airmode'] or 'false' }},
            focus: {{ $notes['focus'] or 'true' }},
            placeholder: "{{ $notes['placeholder'] or "Create a new note here..." }}",
//            callbacks: {
//                onImageUpload: function(files) {
//                    console.log(files);
//                    // upload image to server and create imgNode...
////                    $summernote.summernote('insertNode', imgNode);
//                }
//            }
        });
//        $(el).on('summernote.image.upload', function(we, files) {
//            // upload image to server and create imgNode...
//            console.log('super notes');
////            $summernote.summernote('insertNode', imgNode);
//        });



    });
</script>
