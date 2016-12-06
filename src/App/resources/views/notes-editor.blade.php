@php
    //php here
@endphp
<div class="adv-notes">
    <div class="notes-toolbar">
        <div class="col notes-logo-text text-uppercase">Notes</div>
        <input type="title" class="col-fluid form-control" placeholder="Hi, whats the title of your note? (Enter here)">
        <button class="col" data-toggle="modal" data-target="#sm-image-library">Images Upload</button>
    </div>
    <textarea name="{{ $notes['selector'] or "adv-notes" }}" id="adv-notes" class="notes">

    </textarea>
    <div class="notes-toolbar">
        <div class="spacer col-fluid"></div>
        <button type="submit" class="col">Save Note</button>
    </div>
    <div id="sm-image-library" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
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
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

