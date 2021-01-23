// ****************muestra fecha actual ***************
$(".owl-carousel").owlCarousel({
    // margin:40,
    items:1,
    lazyLoad:true,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    smartSpeed:1500
    // autoplayHoverPause:true,
    
});

/* Nota: owlCarousel deja de funcionar si lo declaro antes del siguiete codigo
 */
let show_date = document.getElementById("date");
let month = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Novienbre","Diciembre");
let date = new Date;
let fecha = date.getDate()+'/'+month[date.getMonth()]+'/'+date.getFullYear();
show_date.innerHTML=fecha;
// ****************************************************
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
        head.classList.remove("sticky");
    }
}

// ****************menu responsiv*******************************
let button_menu =document.getElementById("menu-icon");
let container_menu = document.querySelector(".menu");
let contenido = document.querySelector("main");
button_menu.addEventListener('click',function(){
    container_menu.classList.toggle("toogle_menu");
    contenido.classList.toggle("fixed");
});
//***************************************************************** 