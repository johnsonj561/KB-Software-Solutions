$(document).ready(function(){
  $('.dropdown').hover(function(){
    $(this).find('ul').stop().slideToggle(300);
  });
});