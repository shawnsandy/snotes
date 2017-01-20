<div id="notes" class="container">

    <div class="errors">
        @include('notes::partials.errors')
    </div>

    <div class="collections row">
        @each('notes::partials.collections', $notes, 'notes')
    </div>
</div>
