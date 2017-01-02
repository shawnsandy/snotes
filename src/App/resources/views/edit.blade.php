@extends('notes::shared.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif
    </div>
    <form action="/snotes/{{ $note->id }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div id="notes" class="container">
            <div class="text-right nav">
                <a href="/snotes" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
                </a>
                <a href="/snotes" class="btn btn-default delete-note">
                    <i class="fa fa-times" aria-hidden="true"></i> Delete
                </a>
            </div>
            @include('notes::shared.smart-editor', ['note' => $note ])
        </div>
    </form>
@endsection
