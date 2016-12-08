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

    /**
     * Notes constructor.
     */
    public function __construct() {
        $this->unsplash = new Unsplash();
    }

    /**
     * @return mixed
     */
    public function getImages(){
        return Storage::disk('images')->files('notes');
    }


    /**
     * Get unsplash photos
     *
     * @return array
     */
    public function getUnsplashCollection(){
        $collection = $this->unsplash->unsplashCollection();
        return  $collection;
    }

    /**
     * List of collection photos
     *
     * @return array
     */
    public function getUnsplashCollectionPhotos(){
        $images = $this->unsplash->unsplashCollectionPhotos();
        return $images;
    }

}
