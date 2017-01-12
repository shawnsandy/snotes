<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(['middleware' => ['web']], function () {

    //  your routes goes here
    Route::get('/notes/new', 'ShawnSandy\Summernote\App\Controllers\NotesController@create');
    Route::get('/notes/trash/{id}', 'ShawnSandy\Summernote\App\Controllers\NotesController@destroy');
    Route::resource('/notes', 'ShawnSandy\Summernote\App\Controllers\NotesController');
    Route::get('/notes/img/{path}', 'ShawnSandy\Summernote\App\Controllers\ImagesController')->where('path', '.*');

});
