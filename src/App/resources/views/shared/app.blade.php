@extends('page::page-layouts.default')
@section('body')
    @yield('content')
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('/assets/notes/css/notes.css') }}">
@summernoteStyleCdn()
{!! notesFontAwesomeCdn() !!}
@endpush
@push('scripts')
@summernoteScriptCdn()
@include('notes::partials.notes-adv-js')
@endpush
