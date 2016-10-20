$(function () {
  "use strict";
  $('.scrollTo').click(function() {
    $('html, body').animate({
      scrollTop:$('#contact').offset().top
    }, 2000);
  });
  //notre auto slider
  (function AutoSlider() {
    $('.slider .active').each(function () {
      if (!$(this).is(':last-child')){
      $(this).delay(3000).fadeOut(1000,function () {
         $(this).removeClass('active').next().addClass('active').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).delay(3000).fadeOut(2000,function () {
         $(this).removeClass('active');
      $('.slider div').eq(0).addClass('active').fadeIn();
       AutoSlider();
      });

    }
    });
  }());
});
