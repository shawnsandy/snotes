<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(['middleware' => ['web']], function () {
    //  your routes goes here
    Route::resource('/snotes', 'ShawnSandy\Summernote\App\Controllers\NotesController');
});
