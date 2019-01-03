

jQuery(document).ready(function($){

$(document).ready(function(){
   $(document).lazyload();
});
});

(function($){
   $.fn.lazyload = function(){
      $(window).scroll(lazyload);
      lazyload();
   }

   function lazyload(){
      var winScrollTop = $(window).scrollTop();
      var winHeight = $(window).height();

      $('img').each(function(){
         var imgOTop = $(this).offset().top + 100;

         if(imgOTop < (winHeight + winScrollTop)){
            $(this)
               .css({
                'opacity':'1'
                // 'transition':'opacity 0.5s linear'
              });
         } else{
          $(this)
               .css({
                'opacity':'0.8'
                // 'transition':'opacity 0.5s linear'
              });
         }
      });
      $('.infos-article').each(function(){
         var imgOTop = $(this).offset().top + 100;

         if(imgOTop < (winHeight + winScrollTop)){
            $(this)
               .css({
                'opacity':'1'
                // 'transition':'opacity 0.5s linear'
              });
         } else{
          $(this)
               .css({
                'opacity':'0.8'
                // 'transition':'opacity 0.5s linear'
              });
         }
      });
   }
})(jQuery);
