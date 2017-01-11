<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 1/10/2017
     * Time: 6:12 AM
     */

    namespace ShawnSandy\Summernote\App\Controllers;


    use League\Glide\Responses\LaravelResponseFactory;
    use Illuminate\Contracts\Filesystem\Filesystem;
    use Illuminate\Routing\Controller;
    use League\Glide\ServerFactory;

    class ImagesController extends Controller
    {

        public function __invoke(Filesystem $filesystem, $path)
        {
            $server = ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(), // I want Rackspace here
                'cache' => $filesystem->getDriver(), // I want Rackspace here
                'source_path_prefix' => '/',
                'cache_path_prefix' => '/.cache',
                'base_url' => 'photos'
            ]);

            return $server->getImageResponse($path, request()->all());

        }

    }
