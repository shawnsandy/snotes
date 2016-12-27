@extends('notes::shared.app')
@section('content')
    <form action="/snotes" method="POST">
        {{ csrf_field() }}
        <div id="notes" class="container" style="padding: 100px 0px">
            @include('notes::shared.notes-editor')
        </div>
    </form>
@endsection
@push('scripts')

