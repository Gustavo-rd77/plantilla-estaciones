// *******Menu pegajoso**********

let head = document.getElementById("head");
let position = head.offsetTop;
let altura_menu =  head.clientHeight;
window.onscroll=function(){
    menu_sticky();
}

let menu_sticky = ()=>{
    if(window.scrollY >= position  && window.scrollY > altura_menu){
        head.classList.add("sticky");
    }else{
        head.classList.remove("sticky")
    }
}
// ****************************************************
// ****************menu responsiv*******************************
let button_menu =document.getElementById("menu-icon");
let container_menu = document.querySelector(".menu");
let contenido = document.querySelector("main");
button_menu.addEventListener('click',function(){
    container_menu.classList.toggle("toogle_menu");
    contenido.classList.toggle("fixed");
});
//***************************************************************** 
