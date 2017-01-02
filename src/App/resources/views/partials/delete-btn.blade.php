<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 1/2/2017
     * Time: 11:48 AM
     */
?>

<form action="/photos/{{ $id }}" id="delete-action">
    {{ method_field('DELETE') }}
    <button  class="btn btn-default delete trash" type="button"><i class="fa fa-trash" aria-hidden="true"></i> Move to trash</button>
    <button type="submit" class="btn btn-default confirm-trash"><i class="fa fa-times" aria-hidden="true"></i> Continue to trash</button>
    <button  class="btn btn-default delete confirm-trash trash" type="button"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
</form>
@push('scripts')
<script>
    $(document).ready(function(){
        var trash = $(this).find('.trash');
        var buttons = $(this).find('.btn');
        $(trash).click(function(e){
            e.preventDefault();
             buttons.slideToggle('slow');
            console.log('trash clicked')
        })
    });
</script>
@endpush
