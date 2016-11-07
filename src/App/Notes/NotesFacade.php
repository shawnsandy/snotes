<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 11/7/16
 * Time: 11:29 AM
 */

namespace ShawnSandy\Summernote\App\Notes;


use Illuminate\Support\Facades\Facade;

class NotesFacade extends Facade
{

    /**
     * Facade
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "Notes";
    }

}
