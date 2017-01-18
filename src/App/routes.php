<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(['middleware' => ['web']], function () {

    Route::get('/snotes/index', 'ShawnSandy\Summernote\App\Controllers\NotesController@index');
    Route::get('/snotes/{id}', 'ShawnSandy\Summernote\App\Controllers\NotesController@show');
    Route::get('/snotes/img/{path}', 'ShawnSandy\Summernote\App\Controllers\ImagesController')->where('path', '.*');

    Route::group(['middleware' => 'auth'], function(){
        //  your routes goes here
        Route::get('/snotes/new', 'ShawnSandy\Summernote\App\Controllers\NotesController@create');
        Route::get('/snotes/trash/{id}', 'ShawnSandy\Summernote\App\Controllers\NotesController@destroy');
        Route::resource('/snotes', 'ShawnSandy\Summernote\App\Controllers\NotesController');

    } );

});

