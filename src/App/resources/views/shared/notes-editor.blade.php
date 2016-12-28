@php
    //php here
@endphp
@if($errors->has('snotes_title'))
    <p class="alert alert-danger"> <i class="fa fa-times-circle" aria-hidden="true"></i> {{ $errors->first('snotes_title') }}</p>
@endif
<div class="adv-notes">

    <div class="notes-toolbar">
        <div class="col notes-logo-text text-uppercase">Notes <i class="fa fa-pencil" aria-hidden="true"></i></div>
        <input name="notes_title" class="col-fluid form-control {{ $errors->first('snotes_title', 'error') }}" placeholder="Hi, whats the title of your note? (Enter here)">
        <button class="col" type="button" data-toggle="modal" data-target="#sm-image-library"><i class="fa fa-file-image-o" aria-hidden="true"></i> Images</button>
        @if(function_exists('unsplashSearch'))
            <button class="col"><i class="fa fa-camera" aria-hidden="true"></i> Unsplash Photos</button>
        @endif
    </div>

    <textarea name="{{ $notes['selector'] or "notes_content" }}" id="adv-notes" class="notes"></textarea>
    <div class="notes-toolbar">
        <div class="spacer col-fluid"></div>
        <button type="submit" class="col"><i class="fa fa-file-text" aria-hidden="true"></i> Save Note</button>
    </div>

    {{-- modal --}}
    <div id="sm-image-library" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

