<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 11/7/16
 * Time: 11:27 AM
 */

namespace ShawnSandy\Summernote\App\Notes;


use Illuminate\Support\Facades\Storage;


class Notes
{

    protected $files;

    public function __construct() {
    }

    public function getImages(){

        return Storage::disk('images')->files('notes');
    }

}
