<?php
/**
 * Created by PhpStorm.
 * User: studio-book
 * Date: 12/7/16
 * Time: 7:43 PM
 */

namespace ShawnSandy\Summernote\App\Notes;

use Crew\Unsplash as Photos;

class Unsplash
{
    protected $collection_id;

    public function __construct()
    {
        Photos\HttpClient::init([
            'applicationId' => 'ff1c6c90eec52a82c30dbadbcb0acdc04e403d8a749e16a03909f6978b31d8a9',
            'secret' => 'e89a4910547363b6693a49f17611242b51c34a9ac5bebaa9e95c1db43f62140a',
        ]);
        $scopes = ['public'];
        Photos\HttpClient::$connection->getConnectionUrl($scopes);
        $this->colleciton_id = config('notes.unspalsh_id', '450657');
    }

    /**
     * Collections info
     *
     * @return \Illuminate\Support\Collection
     */
    public function unsplashCollection()
    {
        $collection = (new Photos\HttpClient())->send("get", ['/collections/'.$this->colleciton_id]);
        $collections = collect(json_decode($collection->getBody(), true));
        return $collections;
    }

    /**
     * Photos in collection
     *
     * @return static
     */
    public function unsplashCollectionPhotos()
    {

        $response = (new Photos\HttpClient())->send("get", ['/collections/'.$this->colleciton_id.'/photos']);
        $body = collect(json_decode($response->getBody(), true));
        $images = $body->map(function ($item, $key) {
            return [
                "username" => $item['user']['first_name'] . ' ' . $item['user']['last_name'],
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
