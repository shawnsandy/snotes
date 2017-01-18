<div id="notes" class="container">
    @include("notes::partials.nav")

    <div class="errors">
        @include('notes::partials.errors')
    </div>

    <form action="/snotes/{{ $note->id }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        @include('notes::shared.smart-editor', ['note' => $note ])
    </form>

</div>
