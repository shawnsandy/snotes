<?php

    use Illuminate\Filesystem\Filesystem;
    use League\Glide\Responses\LaravelResponseFactory;
    use League\Glide\ServerFactory;

    if (!function_exists('notesJS')):
        function notesJs()
        {
            return "<script src=\"" . public_path("assets/summernote/summernote.min.js") . "\"></script>";
        }
    endif;


    if (!function_exists('notesFontAwesomeCdn')):
        /*https://www.bootstrapcdn.com/fontawesome/*/
        function notesFontAwesomeCdn()
        {

            return "<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">";
        }
    endif;

    if (!function_exists('notesFontAwesome')):
        /*https://www.bootstrapcdn.com/fontawesome/*/
        function notesFontAwesome()
        {
            return "<link href=\"/assets/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">";
        }
    endif;

    if (!function_exists('notesStyle')):
        function notesStyle()
        {
            return "<link href=\"" . public_path("assets/summernote/summernote.css") . "\" rel=\"stylesheet\">";
        }
    endif;

    if (!function_exists('notesJsCdn')):
        function notesJsCdn()
        {
            return "<script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js\"></script>";
        }
    endif;


    if (!function_exists('notesStyleCdn')):
        function notesStyleCdn()
        {
            return "<link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css\" rel=\"stylesheet\">";
        }
    endif;


    if (!function_exists('notesGetFiles')):


        /**
         * @param array|null $allowed
         * @param string $disk
         * @return static
         */
        function notesGetFiles($allowed = array(), $disk = "notes")
        {

        }

    endif;


    if (!function_exists('notesResizeImage')):


        /**
         * @param $photo
         * @param array $params
         * @param string $storage
         * @return mixed
         */
    function notesResizeImage($photo, $params = [], $storage = 'img/')
        {
            $filesystem = new Filesystem();

            $server = ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(), // I want Rackspace here
                'cache' => $filesystem->getDriver(), // I want Rackspace here
                'source_path_prefix' => 'images',
                'cache_path_prefix' => 'images/.cache',
                'base_url' => 'photos'
            ]);

            return $server->getImageResponse($path, request()->all());
        }

    endif;

        function notesImages(){
            return $images = notesGetFiles();

        }
