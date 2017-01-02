@extends('notes::shared.layout')
@section('body')
    @yield('content')
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('/assets/notes/css/notes.css') }}">
@summernoteStyleCdn()
{!! notesFontAwesome() !!}
@endpush
@push('scripts')
@summernoteScriptCdn()
@endpush
