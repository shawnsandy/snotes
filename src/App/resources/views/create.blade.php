@extends('notes::shared.app')
@section('content')
    <form action="/snotes" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div id="notes" class="container" style="padding: 100px 0px">
            @include('notes::shared.notes-editor')
        </div>
    </form>
@endsection

