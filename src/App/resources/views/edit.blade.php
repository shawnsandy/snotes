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
            <div class="text-right">
                <p>
                    <a href="/snotes" class="btn btn-link btn-lg">
                        <span class="h1">
                            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                        </span></a>
                </p>
            </div>
            @include('notes::shared.notes-editor', ['note' => $note ])
        </div>
    </form>
@endsection
@push('scripts')
