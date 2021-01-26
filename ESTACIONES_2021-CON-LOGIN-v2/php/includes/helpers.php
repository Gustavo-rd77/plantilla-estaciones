<?php 
function showErrores($array_error,$error){
    $alerta =  '';
    if(isset($array_error[$error])){
        $alerta =  "<div class='error'> *$array_error[$error] </div>";
    }
    return($alerta);
}

function deleteErrores(){
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = NULL;
    }
}


?>