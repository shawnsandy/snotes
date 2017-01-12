<div class="modal fade" id="img-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
               <button class="btn btn-default"><i class="fa fa-camera" aria-hidden="true"></i> Browse Photos</button>
            </div>
            <div class="modal-body">
                <div class="notes-insert-img text-center">
                    @each('notes::partials.images', $images, 'img')
                </div>
            </div>

            <div class="modal-footer"><button class="btn btn-primary" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
