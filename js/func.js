$(function () {
  "use strict";
  $('.scrollTo').click(function() {
    $('html, body').animate({
      scrollTop:$('#contact').offset().top
    }, 2000);
  });
  //main-act  auto slider
  (function AutoSlider() {
    $('.slid .act').each(function () {
      if (!$(this).is(':last-child')){
      $(this).fadeOut(10000,function () {
         $(this).removeClass('act').next().addClass('act').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).fadeOut(10000,function () {
         $(this).removeClass('act');
      $('.slid div').eq(0).addClass('act').fadeIn();
       AutoSlider();
      });

    }
    });
  }());
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