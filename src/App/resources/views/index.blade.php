@extends('notes::shared.app')
@section('title', 'Summernote for laravel')
@section('content')
    <div id="notes" class="container">

        <div class="text-right nav">
            <p>
                <a href="/notes/new" class="btn btn-default">
                        <i class="fa fa-plus" aria-hidden="true"></i> New Note
                </a>
            </p>
        </div>

        <div class="errors">
            @include('notes::partials.errors')
        </div>

        <div class="collections row">
            @each('notes::partials.collections', $notes, 'notes')
        </div>
    </div>
@endsection
