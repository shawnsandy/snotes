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
    protected $unsplash ;

    public function __construct() {
        $this->unsplash = new Unsplash();

    }

    public function getImages(){

        return Storage::disk('images')->files('notes');
    }


    public function getUnsplashCollection(){
        $collection = $this->unsplash->unsplashCollection();
        return  $collection;
    }

    public function getUnsplashCollectionPhotos(){
        $images = $this->unsplash->unsplashCollectionPhotos();
        return $images;
    }

}
