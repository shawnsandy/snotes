<div class="text-right nav">

    <a href="/snotes" class="btn btn-default">
        <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
    </a>
    <a href="/snotes/{{ $note->id }}/edit" class="btn btn-default">
        <i class="fa fa-pencil" aria-hidden="true"></i> Edit
    </a>
    @include('notes::partials.delete-btn',['id' => $note->id])

</div>
