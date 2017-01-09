<?php

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
         * @return null|array
         */
        function notesGetFiles($allowed = array(), $disk = "notes")
        {
            $  $img = collect(Storage::disk($disk)->files('images'));

            if (empty($allowed))
                $allowed = ['jpg', 'jpeg', 'png', 'gif', 'svg'];

            $images = $img->filter(function ($item, $key) use ($allowed) {
                $ext = pathinfo($item, PATHINFO_EXTENSION);
                return in_array($ext, $allowed);
            });

            return $images;
        }

    endif;
