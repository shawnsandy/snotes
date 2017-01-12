@extends('notes::shared.app')
@section('title', 'Edit Note')
@section('content')

    <form action="/notes/{{ $note->id }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div id="notes" class="container">
            <div class="text-right nav">
                <a href="/notes" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
                </a>
                @include('notes::partials.delete-btn',['id' => $note->id])
            </div>
            <div class="errors">
                @include('notes::partials.errors')
            </div>
            @include('notes::shared.smart-editor', ['note' => $note ])
        </div>

    </form>
@endsection
