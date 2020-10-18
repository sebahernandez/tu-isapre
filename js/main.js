AOS.init();

$(document).ready(function( $ ){
    $(function () {
   var navbar = $('.navbar');
   $(window).scroll(function () {
     if ($(window).scrollTop() <= 30) {
       navbar.css('box-shadow', '0px 0px ' + $(window).scrollTop() + 'px rgba(0, 0, 0, 0.4)');
     } else {
       navbar.css('box-shadow', '0px 0px 30px rgba(0, 0, 0, 0.4)');
     }
   });
 })
 });
 