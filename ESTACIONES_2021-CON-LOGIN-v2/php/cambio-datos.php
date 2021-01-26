<?php
    include_once 'includes/conexion.php';
    if(isset($_POST) && isset($_SESSION['usuario'])){
       $precio_1 = isset($_POST['precio-1'])  ? (float)trim($_POST['precio-1']) : false;
       $precio_2 = isset($_POST['precio-2'])  ? (float)trim($_POST['precio-2']) : false;
       $precio_3 = isset($_POST['precio-3'])  ? (float)trim($_POST['precio-3']) : false;
        $usuario_id = (int)$_SESSION['usuario']['id'];
        
        $sql ="UPDATE precio_gasolina_actual SET producto_1 = $precio_1,
                      producto_2 = $precio_2,
                      producto_3 = $precio_3 WHERE usuario_id = $usuario_id";

        $estatus=mysqli_query($db,$sql);  
        
    }
    header('Location: ../index.php');
?>