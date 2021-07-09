

// Preview da imagem
$(function () {
    $('input[name="files[]"]').change(function (files) {

        $('.content_image').text('');

        $.each(files.target.files, function (key, value) {
            var reader = new FileReader();
            reader.onload = function (value) {
                $('.content_image').append(
                    '<div class="property_image_item">' +
                    '<div class="embed radius" ' +
                    'style="background-image: url(' + value.target.result + '); background-size: cover; background-position: center center;">' +
                    '</div>' +
                    '</div>');
            };
            reader.readAsDataURL(value);
        });
    });
});

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
    URL.revokeObjectURL(output.src) // free memory
    }
};

// ckeditor
ClassicEditor
.create( document.querySelector( '#wysiwyg' ), {
    
    removePlugins: [ 'ImageToolbar', 'ImageCaption', 'ImageStyle' ],
    alignment: {
        options: [ 'left', 'right' ]
    },
    toolbar: { 
        items: [
        'heading', '|',
        'bold', 'italic', '|',
        'link', '|',
        'outdent', 'indent', '|',
        'bulletedList', 'numberedList', '|',
        'insertTable', '|',
        'undo', 'redo'
    ],
    shouldNotGroupWhenFull: true
}
} )
.catch( error => {
    console.error( error );
} );

/******/ (() => { // webpackBootstrap
    var __webpack_exports__ = {};
    /*!**************************************************!*\
      !*** ./resources/views/admin/assets/js/login.js ***!
      \**************************************************/
    $(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('form[name="validator"]').submit(function (event) {
        event.preventDefault();
        var form = $(this);
        var action = form.attr('action');
        var titulo = form.find('input[name="titulo"]').val();
        var wysiwyg = $( 'textarea.form-control' ).val();
        var autor = form.find('input[name="autor"]').val();
        // var formData = new FormData(this);
        $.post(action, {
          titulo: titulo,
          wysiwyg: wysiwyg,
          autor: autor,
        //   image: formData,
        }, function (response) {
          console.log(response);
    
          if (response.message) {
            ajaxMessage(response.message, 3);
          }
    
          if (response.redirect) {
            window.location.href = response.redirect;
          }
        }, 'json');
        console.log(action, titulo, wysiwyg, autor,);
      });
    });
    var ajaxResponseBaseTime = 3;
    
    function ajaxMessage(message, time) {
      var ajaxMessage = $(message);
      ajaxMessage.append("<div class='message_time'></div>");
      ajaxMessage.find(".message_time").animate({
        "width": "100%"
      }, time * 1000, function () {
        $(this).parents(".message").fadeOut(200);
      });
      $(".ajax_response").append(ajaxMessage);
    }
    /******/ })()
    ;