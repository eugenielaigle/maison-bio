jQuery(document).ready(function($){
// ANIMATION BARRE POUR SCROLL BODY
$('.border-menu').append('<div id="progress" class="xs-invisible"></div>');
$('.border-menu').append('<div id="progress-bar" class="xs-visible"></div>');
  // $('#navbar').append('<div id="progress-bar" class="xs-visible"></div>');

  if ($(window).width()<=768){
  $(document).on('scroll',function(){ // Détection du scroll

    // Calcul de la hauteur "utile"
    var hauteur = $(document).height()-$(window).height();

    // Récupération de la position verticale
    var position = $(document).scrollTop();

    // Récupération de la largeur de la fenêtre
    var largeur = $('#site-navigation').width();
    // var largeur = $('#navbar').width();

    // Calcul de la largeur de la barre
    var barre = position / hauteur * largeur;

    // Modification du CSS pour élargir ou réduire la barre
    $("#progress-bar").css("width",barre);
});


} else if ($(window).width() == 1024){
  $(document).on('scroll',function(){ // Détection du scroll

    // Calcul de la hauteur "utile"
    var hauteur = $(document).height()-$(window).height();

    // Récupération de la position verticale
    var position = $(document).scrollTop();

    // Récupération de la largeur de la fenêtre
    var largeur = $('.border-menu').width();
    // var largeur = $('#navbar').width();

    // Calcul de la largeur de la barre
    var barre = position / hauteur * largeur;

    // Modification du CSS pour élargir ou réduire la barre
    $("#progress").css("width",barre);
});

  $(document).on('scroll',function(){ // Détection du scroll

    // Calcul de la hauteur "utile"
    var hauteur = $(document).height()-$(window).height();

    // Récupération de la position verticale
    var position = $(document).scrollTop();

    // Récupération de la largeur de la fenêtre
    var largeur = $('.border-menu').width();
    // var largeur = $('#navbar').width();

    // Calcul de la largeur de la barre
    var barre = position / hauteur * largeur;

    // Modification du CSS pour élargir ou réduire la barre
    $("#progress-bar").css("width",barre);
});
} else if ($(window).width() > 768 && $('body').hasClass('home')){

    $(document).on('scroll',function(){ // Détection du scroll

    // Calcul de la hauteur "utile"
    var hauteur = $(document).height()-$(window).height();

    // Récupération de la position verticale
    var position = $(document).scrollTop();

    // Récupération de la largeur de la fenêtre
    var largeur = $('.border-menu').width();

    // Calcul de la largeur de la barre
    var barre = position / hauteur * largeur;

    // Modification du CSS pour élargir ou réduire la barre
    if($(window).scrollTop() > 250){
        $("#progress").css("width",barre);
    } else if ($(window).scrollTop() < 250) {
        $("#progress").css("width",0);
    }
});

}else {
    $(document).on('scroll',function(){ // Détection du scroll

    // Calcul de la hauteur "utile"
    var hauteur = $(document).height()-$(window).height();

    // Récupération de la position verticale
    var position = $(document).scrollTop();

    // Récupération de la largeur de la fenêtre
    var largeur = $('.border-menu').width();

    // Calcul de la largeur de la barre
    var barre = position / hauteur * largeur;

    // Modification du CSS pour élargir ou réduire la barre
    $("#progress").css("width",barre);
});
}

if ($(window).width()<=767 && $('body').hasClass('home')){
  $('#site-navigation .menu-toggle').on('click', function(){
    $('.article-navigation .menu-menu-home-principal-container').slideToggle();
    $('.article-navigation .menu-toggle img').toggle();
    // $('.article-navigation .menu-toggle p').slideToggle();
});
}else if ($(window).width()>=767 && $(window).width()<=769 && $('body').hasClass('home')){
$('#site-navigation .menu-toggle').on('click', function(){
    $('.top-navigation .menu-menu-home-principal-container').slideToggle();
    $('.article-navigation .menu-menu-home-principal-container').slideToggle();
    $('.article-navigation .menu-toggle img').toggle();
    // $('.article-navigation .menu-toggle p').slideToggle();
});

}else{
    $('.article-navigation .menu-toggle').on('click', function(){
        $('.menu-menu-home-principal-container').slideToggle();
        $('.menu-toggle img').slideToggle();
        $('.menu-toggle p').slideToggle();
    });
}



});


jQuery(document).ready(function ($) {
    //initialize swiper when document ready
   if ($(window).width()<=768){
    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      init: true,
      width: 260
    });
       }
  });


