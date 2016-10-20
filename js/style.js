$(function(){
/*Global*/
"use strict";
$('.scrollTo').on('click', function(event) {
       var page = $(this).attr('href'),
           speed = 750,
           $body = $('html, body');

       $body.animate({
           scrollTop: $(page).offset().top
       }, speed);

       event.preventDefault();
   });
});
