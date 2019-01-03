jQuery(document).ready(function($){

if ($(window).width()>=769){

  $('#menu-item-34').on('click', function(e){
    e.preventDefault();
    $('.recherche').toggle();
    $('#q').focus();
  });

  $('#loupe').on('click', function(e){
    e.preventDefault();
    $('.recherche').toggle();
    $('#q').focus();
  });

  $(document).ready(function(){
   $("#q").keyup(function(event){
    var search_val = $("#q").val();
    console.log(search_val);
    $.post(
      ajaxurl,
      {
        action:'search',
        search_val: search_val
      },
      function(response){
        console.log(response);
        // $('#main').addClass('category-main');
        $('#main').addClass('search-main');
        $('#main').html(response);
         str = $('.search-main.post.entry-header').text();
         console.log(str);
         if($.trim(str) === "") {
          $('.search-main.post').hide();
         }

      }
      );
  });

 });
} else{


    $(document).ready(function(){
   $("#search-submit").on("click", function(event){
    event.preventDefault();
    var search_val = $("#s").val();
    console.log(search_val);
    $.post(
      ajaxurl,
      {
        action:'search',
        search_val: search_val
      },
      function(response){
        console.log(response);
        // $('#main').addClass('category-main');
        $('#main').addClass('searching-main');
        $('.search-found').html(response);
         str = $('#search-submit').text();
         console.log(str);
         if($.trim(str) === "") {
          $('.rechercher').hide();
          $('.searching-main').css('margin-top', 0);
          $('.search-form').animate({
            'margin-top': '10vh',
            'height': '10vh'
          }, 200);
         }

      }
      );
  });
 });
}
});





  // $(document).on('click', '.menu-menu-home-principal-container')
  // setinterval toutes les secondes valeur input text
  // keyup des que la personne lache une touche de clavier
