<div id="notes" class="container">

    <form action="/snotes" method="POST">
        {{ csrf_field() }}

        <div class="errors">
            @include('notes::partials.errors')
        </div>

        @include('notes::shared.smart-editor')

    </form>

</div>
