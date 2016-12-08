@php
    //php here
@endphp
<div class="adv-notes">
    <div class="notes-toolbar">
        <div class="col notes-logo-text text-uppercase">Notes <i class="fa fa-pencil" aria-hidden="true"></i></div>
        <input name="snotes_title" class="col-fluid form-control" placeholder="Hi, whats the title of your note? (Enter here)">
        <button class="col" type="button" data-toggle="modal" data-target="#sm-image-library"><i class="fa fa-file-image-o" aria-hidden="true"></i> Images</button>
        @if(function_exists('unsplashSearch'))
            <button class="col"><i class="fa fa-camera" aria-hidden="true"></i> Unsplash Photos</button>
        @endif
    </div>
    <textarea name="{{ $notes['selector'] or "snotes_description" }}" id="adv-notes" class="notes"></textarea>
    <div class="notes-toolbar">
        <div class="spacer col-fluid"></div>
        <button type="submit" class="col"><i class="fa fa-file-text" aria-hidden="true"></i> Save Note</button>
    </div>

    {{-- modal --}}
    <div id="sm-image-library" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Insert Images</h4>
                </div>
                <div class="modal-body">
                    @each('notes::partials.thumbs', $images, 'img')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

