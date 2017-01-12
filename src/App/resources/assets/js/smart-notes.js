/**
 * Created by Shawn on 1/1/2017.
 */

$(document).ready(function () {

    $(".smart-editor").each(function () {

        var editor = $(this).data("notesEditor");
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
                $(editor).summernote("insertImage", src, function($image){
                    $image.attr("class", "img-responsive")
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


});
