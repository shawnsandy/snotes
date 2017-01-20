<div id="notes" class="container">

    <div class="collections">


        <div class="note">
            @include('notes::partials.nav')
            <p class="note-title">
                {{ ucwords($note->notes_title) }}
            </p>
            {!! $note->notes_content !!}
            <hr>
            <div class="meta text-right layout-center">
                <div class="content">
                        <span>
                           <i class="fa fa-circle-o"></i> Posted {{ Carbon\Carbon::parse($note->created_at)->diffForHumans() }}
                            by {{ ucwords($note->user->name) }}
                        </span>
                </div>
            </div>
        </div>

    </div>

</div>
