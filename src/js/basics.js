
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
