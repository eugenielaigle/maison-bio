// Seulement pour pages Article
jQuery(document).ready(function($){
if ($(window).width()>769){
    $(document).on('scroll', function() {
   if($(window).scrollTop() > 195){
    $('#titre-post-header').css('display','inline');
    $('#j-post').css('display','none');
  }else if($(window).scrollTop()< 195){
    $('#titre-post-header').css('display','none');
    $('#j-post').css('display','inline');
  }

});
  }
});
