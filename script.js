// Menu ---------------------------------------------------

"use strict";
window.addEventListener("DOMContentLoaded", (event) => {
  /* MENU */
  const lemenu = document.getElementById("lemenu");
  const button_menu = document.getElementById("button_menu");
  button_menu.addEventListener('click',function(){
    lemenu.style.display = (lemenu.style.display == 'none')? '':'none';
  });
  // au chargement de la page
  window.onload = function(){
    // on teste la largeur de la fenêtre
    var ww = window.innerWidth; // en pixels
    lemenu.style.display = ( ww > 1178 )? '':'none';
    button_menu.style.display = ( ww > 1178 )? 'none':'';
  };
  // au redimensionnement de la fenêtre
  window.onresize = function(){
    // on teste la largeur de la fenêtre
    var ww = window.innerWidth; // en pixels
    lemenu.style.display = ( ww > 1178 )? '':'none';
    button_menu.style.display = ( ww > 1178 )? 'none':'';
  };

});