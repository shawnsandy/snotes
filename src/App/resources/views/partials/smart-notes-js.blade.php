@php
    // php here
@endphp
<script>

    $(document).ready(function () {
        {{--var el = "{{ $notes['selector'] or "#adv-notes" }}";--}}
        $('.smart-editor').each(function() {

            var editor  = $(this).data('notesEditor');
            var imgBtn = $(this).data('notesImgBtn');

            $(editor).summernote({
                placeholder: 'Now add some details here...',
                focus: true,
                airMode: true
            });

            $(imgBtn).click(function(e){
                e.preventDefault();
                var src = 'https://images.unsplash.com/photo-1469536526925-9b5547cd5d68?dpr=1&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop="); width: 1176px; height: 783px;';
                $(editor).summernote('insertImage', src);

                console.log('image insert')
            });

        }) ;

    });

</script>
