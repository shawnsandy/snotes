@extends('notes::shared.app')
@section('content')
    <div id="notes" class="container">
        <div class="text-right">
            <p>
                <a href="/snotes" class="btn btn-link">
                    <span class="h1">   <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  </span>
                </a>
                <a href="/snotes/{{ $note->id }}/edit" class="btn btn-link">
                    <span class="h1">   <i class="fa fa-pencil-square" aria-hidden="true"></i> </span>
                </a>
            </p>
        </div>

        <div class="collections">
            <div class="note">
                <p class="note-title">{{ $note->notes_title }}</p>
                {!! $note->notes_content !!}
            </div>
        </div>
    </div>
    @endsection
