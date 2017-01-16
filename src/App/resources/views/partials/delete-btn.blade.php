<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 1/2/2017
     * Time: 11:48 AM
     */
?>


<button class="btn btn-default delete trash nav-btn" type="button"><i class="fa fa-trash" aria-hidden="true"></i> Move to trash
</button>
<a href="/snotes/trash/{{$id}}" class="btn btn-default confirm-trash nav-btn"><i class="fa fa-trash" aria-hidden="true"></i>
    Continue to trash</a>
<button class="btn btn-default delete confirm-trash trash nav-btn" type="button"><i class="fa fa-times" aria-hidden="true"></i>
    Cancel
</button>

@push('scripts')
<script>
    $(document).ready(function () {

    });
</script>
@endpush
