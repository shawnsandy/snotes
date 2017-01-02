/**
 * Created by Shawn on 1/1/2017.
 */

$(document).ready(function () {

    $('.smart-editor').each(function() {

        var editor  = $(this).data('notesEditor');
        var imgBtn = $(this).data('notesImgBtn');
        var placeholder = $(this).data('notesPlaceholder') ? $(this).data('notesPlaceholder') : 'Now lets add some details here...';

        /* instantiate the editor */
        $(editor).summernote({
            placeholder: placeholder ,
            focus: true,
            airMode: true
        });

        /* setup some custom buttons */
        $(imgBtn).click(function(e){
            e.preventDefault();
            var src = 'https://images.unsplash.com/photo-1469536526925-9b5547cd5d68?dpr=1&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop="); width: 1176px; height: 783px;';
            $(editor).summernote('insertImage', src);

            console.log('image insert')
        });

    }) ;

});
