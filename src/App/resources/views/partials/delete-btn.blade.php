<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 1/2/2017
     * Time: 11:48 AM
     */
?>

<form action="/photos/{{ $id }}">
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-default"><i class="fa fa-trash" aria-hidden="true"></i>Move to trash</button>
</form>
