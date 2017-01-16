@extends('notes::shared.app')
@section('title', 'Reading - '.$note->notes_title )
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
                <p class="note-title">
                {{ ucwords($note->notes_title) }}
                </p>
                {!! $note->notes_content !!}
                <hr>
                <div class="meta text-right layout-center">
                    <div class="content">
                        <span>
                            Posted {{ Carbon\Carbon::parse($note->created_at)->diffForHumans() }}
                            by {{ ucwords($note->user->name) }}
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
