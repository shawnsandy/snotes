@extends('page::page-layouts.default')
@section('page')
    <from><div id="notes" class="container" style="padding: 100px 0px">
            @include('notes::shared.notes-editor')
    </div>
    </from>
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