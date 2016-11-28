$(function(){
  $(window).scroll(function() {
     if($(window).scrollTop() >= 100) {
        $('.navbar').addClass('scrolled');
     }
     else {
        $('.navbar').removeClass('scrolled');
     }
  });
});
