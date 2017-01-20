<div class="text-right nav">

    <a href="/snotes" class="btn btn-default">
        <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
    </a>

    @if(Auth::check())

        @if(isset($note->id))

            <a href="/snotes/{{ $note->id }}/edit" class="btn btn-default">
                <i class="fa fa-pencil" aria-hidden="true"></i> Edit
            </a>

            @if(Auth::id() == $note->user->id && Route::currentRouteNamed('snotes.edit') )
                @include('notes::partials.delete-btn',['id' => $note->id])
            @endif

        @endif

    @endif

</div>
