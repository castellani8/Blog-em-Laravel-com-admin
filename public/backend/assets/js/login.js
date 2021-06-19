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
  $('form[name="login"]').submit(function (event) {
    event.preventDefault();
    var form = $(this);
    var action = form.attr('action');
    var email = form.find('input[name="email"]').val();
    var password = form.find('input[name="password_check"]').val();
    $.post(action, {
      email: email,
      password: password
    }, function (response) {
      console.log(response);

      if (response.message) {
        ajaxMessage(response.message, 3);
      }

      if (response.redirect) {
        window.location.href = response.redirect;
      }
    }, 'json');
    console.log(action, email, password);
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