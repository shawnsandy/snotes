<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 11/7/16
 * Time: 11:27 AM
 */

namespace ShawnSandy\Summernote\App\Notes;


use Illuminate\Support\Facades\Storage;
use Crew\Unsplash as Unsplash;

class Notes
{

    protected $files;

    public function __construct() {
    }

    public function getImages(){

        return Storage::disk('images')->files('notes');
    }

    public function getUnsplashPhotos(){

        Unsplash\HttpClient::init([
            'applicationId' => 'ff1c6c90eec52a82c30dbadbcb0acdc04e403d8a749e16a03909f6978b31d8a9',
            'secret' => 'e89a4910547363b6693a49f17611242b51c34a9ac5bebaa9e95c1db43f62140a',
        ]);
        $scopes = ['public', 'write_user'];
        Unsplash\HttpClient::$connection->getConnectionUrl($scopes);
        $response = (new Unsplash\HttpClient())->send("get", ['/collections/450657/photos']);
        $body = collect(json_decode($response->getBody(), true));

        $images = $body->map(function ($item, $key) {
            return [
                "username" => $item['user']['first_name'].' '.$item['user']['last_name'],
                "id" => $item['user']['id'],
                "user_profile" => $item['user']['links']['html'],
                "avatar" => $item['user']['profile_image']['small'],
                "photo_raw" => $item['urls']['raw'],
                "photo_full" => $item['urls']['full'],
                "photo_regular" => $item['urls']['regular'],
                "photo_small" => $item['urls']['small'],
                "photo_thumb" => $item['urls']['thumb']
            ];
        });

        return $images;

    }

}
