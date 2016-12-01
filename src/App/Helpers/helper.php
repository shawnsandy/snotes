<?php


    function notesJs(){
        return "<script src=\"".public_path("assets/summernote/summernote.min.js")."\"></script>";
    }

    function notesStyle(){
        return "<link href=\"".public_path("assets/summernote/summernote.css")."\" rel=\"stylesheet\">";
    }

    function notesJsCdn(){
        return "<script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js\"></script>";
    }

    function notesStyleCdn(){
        return "<link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css\" rel=\"stylesheet\">";
    }
