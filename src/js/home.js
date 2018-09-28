

jQuery(document).ready(function($){

var navbar = $('.home-fixe-navigation .border-menu');
  var navbarBase = $('.home-fixe-navigation');
  navbar.css("display", "none");
  $(document).on('scroll', function() {
   if($(window).scrollTop()> 800){
    navbar.slideDown('slow');
    // $('#navbar .navbar-toggler').on('click', function() {
    //   $('#navbar').css("display", "flex");
    // });
  }else{
    navbar.slideUp('slow');
    navbarBase.css("display", "block");
  }
});


if ($(window).width()>769){
  $(document).on('scroll', function() {
   if($(window).scrollTop() > 195){
    $('#site-navigation').removeClass('main-navigation');
    $('#site-navigation').addClass('article-navigation');
    $('#site-navigation').addClass('home-fixe-navigation');
  }else if($(window).scrollTop()< 195){
    $('#site-navigation').removeClass('article-navigation');
    $('#site-navigation').removeClass('home-fixe-navigation');
    $('#site-navigation').addClass('main-navigation');
  }
});
}else if ($(window).width() >=767 && $(window).width() <= 769) {
$(document).on('scroll', function() {
   if($(window).scrollTop() > 200){
    // $('#site-navigation').removeClass('main-navigation');
    $('#site-navigation').removeClass('top-navigation');
    $('#site-navigation').addClass('article-navigation');
    $('#site-navigation').addClass('home-fixe-navigation');
    $('.menu-toggle img').css("display","block");
    // $('.menu-toggle p').css("display","none");
     $('.menu-menu-home-principal-container').css("display","none");


  }else if($(window).scrollTop()< 200){
    $('#site-navigation').addClass('top-navigation');
    $('#site-navigation').removeClass('article-navigation');
    $('#site-navigation').removeClass('home-fixe-navigation');
    $('.menu-toggle img').css("display","none");
    $('.menu-toggle p').css("display","none");
    $('.menu-menu-home-principal-container').css("display","none");
    // $('#site-navigation').addClass('main-navigation');
  }
  });
}else{
  $(document).on('scroll', function() {
   if($(window).scrollTop() > 200){
    // $('#site-navigation').removeClass('main-navigation');
    $('#site-navigation').removeClass('top-navigation');
    $('#site-navigation').addClass('article-navigation');
    $('#site-navigation').addClass('home-fixe-navigation');
    $('.menu-toggle img').css("display","block");
    // $('.menu-toggle p').css("display","none");
     $('.menu-menu-home-principal-container').css("display","none");


  }else if($(window).scrollTop()< 200){
    $('#site-navigation').addClass('top-navigation');
    $('#site-navigation').removeClass('article-navigation');
    $('#site-navigation').removeClass('home-fixe-navigation');
    $('.menu-toggle img').css("display","none");
    $('.menu-toggle p').css("display","none");
    $('.menu-menu-home-principal-container').css("display","block");
    // $('#site-navigation').addClass('main-navigation');
  }
});
}



// if ($(window).width()<=769){
//   $('.home .article-navigation .menu-toggle img').on('click', function(){
//         $('.menu-menu-home-principal-container').slideToggle();
//         $('.menu-toggle img').slideToggle();
//         $('.menu-toggle p').slideToggle();
//     });
// }


});




// jQuery(document).ready(function($){
// var yourImg = $('.entry-thumbnail img');
// if(yourImg && yourImg.style) {

//     var imgWidth = yourImg.style.width;
//     yourImg.style.width = '100%';
//     yourImg.style.height = yourImg.style.width;
// }
// });


// var HorsSujet = function () {
//   var objet = document.getElementsByClassName("size-post-thumbnail"); //moi : id du div.
//   var parent = objet.parentNode;
//   var p_size = { //On récupère la taille.
//     x: parent.offsetWidth,
//     y: parent.offsetHeight
//   };
//   var c_size = { //On récupère le pourcentage.
//     x: objet.getAttribute("mywidth"),
//     y: objet.getAttribute("myheight")
//   };
//   var n_size = { //On calcul la taille.
//     x: p_size.x * c_size.x/100,
//     y: p_size.y * c_size.y/100
//   };

//   if (n_size.x <= n_size.y) { //Cette condition donne la priorité à la taille la plus petite.
//     objet.style.width = n_size.x+"px";
//     objet.style.height = n_size.x+"px";
//   } else {
//     objet.style.width = n_size.y+"px";
//     objet.style.height = n_size.y+"px";
//   }
// };

// window.onresize = HorsSujet;
// HorsSujet(); //On appelle une première fois le script (obligatoire).

