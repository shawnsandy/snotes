@php
    //php here
@endphp


<div class="adv-notes">

    <div class="notes-toolbar">
        <div class="col notes-logo-text text-uppercase">Notes <i class="fa fa-pencil" aria-hidden="true"></i></div>
        <input name="notes_title" class="col-fluid form-control {{ $errors->first('notes_title', 'error') }}" placeholder="Hi, what would you like to write about today? (Enter it here)" value="{{ old('notes_title', (isset($note->notes_title) ? $note->notes_title : '')) }}">
        <button class="col" type="button" data-toggle="modal" data-target="#sm-image-library"><i class="fa fa-file-image-o" aria-hidden="true"></i> Images</button>
        @if(function_exists('unsplashSearch'))
            <button class="col"><i class="fa fa-camera" aria-hidden="true"></i> Unsplash Photos</button>
        @endif
    </div>

    <textarea name="{{ $notes['selector'] or "notes_content" }}" id="adv-notes" class="notes">{{ old('notes_content', (isset($note->notes_content) ? $note->notes_content : '')) }}
    </textarea>

    <div class="notes-toolbar">
        <button type="submit" class="col"><i class="fa fa-file-text" aria-hidden="true"></i> Save Note</button>
        <div class="spacer col-fluid"></div>
    </div>

    {{-- modal --}}
    <div id="sm-image-library" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur eaque esse,
                        maxime nemo odio rerum? Accusamus aperiam aspernatur autem, consequatur dolorem facere facilis
                        harum in laborum molestias nesciunt quae quis ratione reprehenderit, sequi. Aperiam culpa earum
                        nesciunt numquam velit! Ab adipisci corporis deserunt, distinctio dolorem expedita facilis fuga
                        fugit impedit, itaque minus nihil obcaecati perspiciatis quae sed ullam, voluptates!</p>
                    @each('notes::partials.thumbs', $images, 'img')
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

