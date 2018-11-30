$(document).ready(function () {
    "use strict"; // Start of use strict
    //summernote
    $('#summernote').summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true,                  // set focus to editable area after initializing summernote
        toolbar: [
          // [groupName, [list of button]]
          // ['style', ['bold', 'italic', 'underline', 'clear']],
          // ['font', ['strikethrough', 'superscript', 'subscript']],
          // ['fontsize', ['fontsize']],
          // ['color', ['color']],
          // ['para', ['ul', 'ol', 'paragraph']],
          // ['height', ['height']]
          ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['fontsize', 'color']],
        ['font', ['fontname']],
        ['para', ['paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr', 'video']], // image and doc are customized buttons
        ['misc', ['codeview', 'fullscreen']],
        ['help', ['help']]
        ]
    });
    
    //summernote
    $('#summernote2').summernote({
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true  // set focus to editable area after initializing summernote
    });
});