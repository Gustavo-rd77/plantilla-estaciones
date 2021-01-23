// ******bloquear boton*******************
let checkbox = document.getElementById("checkbox");
let send = document.getElementById("send");
let form = document.getElementById("send_form");
let inputs = document.querySelectorAll("input");
let textarea = document.getElementById("text")
let errores = document.querySelectorAll(".error");
let status  = document.getElementById("status");
send.disabled = true;

// ********************menu pegajoso********************************
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
// ********************fin menu*************************************
// ****************menu responsiv*******************************
let button_menu =document.getElementById("menu-icon");
let container_menu = document.querySelector(".menu");
let contenido = document.querySelector("main");
button_menu.addEventListener('click',function(){
    container_menu.classList.toggle("toogle_menu");
    contenido.classList.toggle("fixed");
});
//***************************************************************** 

checkbox.addEventListener('click',function(){
    if(this.checked == true){
        send.style.opacity = "1";
        send.disabled = false;
    }
    else{
        send.style.opacity = "0.5";
        send.disabled = true;
    }
});



function show_r(result){
    errores.forEach((i)=>{
        i.innerHTML="";
    });
    status.innerHTML=""; 
    status.classList.remove("error_general");
    status.classList.remove("ok");
    switch (result) {
        case "1":
            errores[0].innerHTML="Ingrese solo letras";
            break;
        case "2":
            errores[1].innerHTML="Correo incorrecto";
            break;           
        case "3":
            errores[2].innerHTML="Ingrese solo de 7 a 10 digitos";
            break;
        case "4":
            status.innerHTML="Ingrese todos los campos";
            status.classList.add("error_general");
            break;  
        case "ok":
            status.innerHTML="Mensaje eviado.";
            status.classList.add("ok");
            break; 
        default:
            break;
    }
}

function formSend(){
    let name,email,phone,case_1,msg, result,cadena;
    name = inputs[0].value;
    email = inputs[1].value;
    phone = inputs[2].value;
    case_1 = inputs[3].value;
    msg = textarea.value;
    cadena = "name="+name+"&email="+email+"&phone="+phone+"&case="+case_1+"&msg="+msg;
    let xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }else{
        //IE 5Y6
        xmlhttp= new ActiveXObject("Microsoft.HMLTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            result=xmlhttp.responseText;
            show_r(result);
        }
    }
    xmlhttp.open("POST","php/envio_email.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(cadena);
}

let clear_inputs = ()=>{
    inputs[0].value="";
    inputs[1].value="";
    inputs[2].value="";
    inputs[3].value="";
    textarea.value="";
    checkbox.click();   
}



form.addEventListener('submit',function(event){
    event.preventDefault();
    formSend();
    clear_inputs();
    
});






