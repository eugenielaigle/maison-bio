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


// el = $(".citation-article");

// el.on('inview', function(event, isInView) {
//   if (isInView) {

//     // element is now visible in the viewport
//     el.css({
//       'opacity' : '1',
//       'transition': 'all 1s linear'
//     });


//   } else {
//     // element has gone out of viewport
//     el.css({
//       'opacity' : '0',
//       'transition': 'all 0.5s linear'
//     });
//   }
// });

// $('.article-content p:nth-child(n+3)').each(function(){
//       $(this).addClass('scrollme animateme').attr({
//         "data-opacity": "0",
//         "data-from": "0.5",
//         "data-to": "0",
//         "data-when": "enter",
//         "data-translatey": "250"
//       });
// });

// $('.content-deux p').each(function(){
//       $(this).addClass('scrollme animateme').attr({
//         "data-opacity": "0",
//         "data-from": "0.5",
//         "data-to": "0",
//         "data-when": "enter",
//         "data-translatey": "250"
//       });
// });

});
