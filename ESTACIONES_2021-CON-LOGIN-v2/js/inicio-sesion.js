window.onload = function(){
    // ****************menu responsiv*******************************
let button_menu =document.getElementById("menu-icon");
let container_menu = document.querySelector(".menu");
let contenido = document.querySelector("main");
button_menu.addEventListener('click',function(){
    container_menu.classList.toggle("toogle_menu");
    contenido.classList.toggle("fixed");
});

}