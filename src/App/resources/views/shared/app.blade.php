@extends('notes::shared.layout')
@section('body')
    @yield('content')
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('/assets/notes/css/notes.css') }}">
<link rel="stylesheet" href="/assets/notes/css/note-editor.css">
@summernoteStyleCdn()
{!! notesFontAwesome() !!}
@endpush
@push('scripts')
@summernoteScriptCdn()
@endpush
