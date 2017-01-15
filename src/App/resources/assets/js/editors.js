"use strict";

/*get the editor settings from the data-attributes*/
var el = $(".summernote-editor");

var height = (el.data("height")) ? el.data("height") : "300";
/*var height = (el.data()) ?$el.data() : "";*/

/* check if toolbar is set if note set to null*/
if(!toolbar && typeof toolbar == "undefined" && toolbar != null && toolbar.length > 0) { toolbar = null;}

var summernotes = function () {

    $(el).each(function () {

        /*setup a switch to function get the toolbar config*/
        $(this).summernote({
            height: height,
            minHeight: null,
            maxHeight: null,
            focus: true,
            toolbar: toolbar
        })
    });

};

var summernote_smart_editor = function () {

    $(".smart-editor").each(function () {

        var editor = $(this).data("editor");
        var placeholder = $(this).data("notesPlaceholder") ? $(this).data("notesPlaceholder") : "Now lets add some details here...";

        /**
         *  instantiate the editor
         */

        $(editor).summernote({
            placeholder: placeholder,
            focus: true,
            airMode: true
        });

        $(".add-image").each(function () {
            $(this).click(function (e) {
                e.preventDefault();
                var src = $(this).data("src");
                $(editor).summernote("insertImage", src, function ($image) {
                    $image.attr("class", "notes-photo img-responsive")
                });
                $("#img-modal").modal("hide");
            })
        });

    });

    /**
     * Nav btn js
     */
    var trash = $(".trash");
    var buttons = $(".nav-btn");
    $(trash).click(function (e) {
        e.preventDefault();
        buttons.toggle();
    })

};

