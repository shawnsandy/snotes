@extends('notes::shared.app')
@section('title', 'Summernote for laravel')
@section('content')
    <div id="notes" class="container">
    <h1>Summernote Demo</h1>
        <div class="summernote-editor"></div>
    </div>
@endsection
@push('scripts')'
<script>
    var note = "note";
</script>
<script src="/assets/notes/js/editors.js"></script>
<script>
    var toolbar = [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
    ];
    summernotes();
</script>
@endpush
