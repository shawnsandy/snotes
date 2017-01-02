@extends('notes::shared.app')

@section('content')
    <div id="notes" class="container">

        <div class="text-right nav">
                <a href="/snotes" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
                </a>
                <a href="/snotes/{{ $note->id }}/edit" class="btn btn-default">
                     <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                </a>
        </div>

        <div class="collections">
            <div class="note">
                <p class="note-title">{{ $note->notes_title }}</p>
                {!! $note->notes_content !!}
            </div>
        </div>

    </div>

    @endsection
