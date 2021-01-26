<?php
    require_once 'includes/conexion.php';
if(isset($_POST)){
  $email    = isset($_POST['email']) ?  trim($_POST['email'])  : false;
  $password = isset($_POST['password']) ?  trim($_POST['password']) : false;
    $errores = array();

  if($email && $password){
    $sql = "SELECT * FROM usuarios WHERE correo_estacion = '$email'"; 
    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login) == 1){
       $usuario = mysqli_fetch_assoc($login); 
       
       if($password == $usuario['password']){
           $_SESSION['usuario'] = $usuario;
       }else{
           $errores['password'] = "contraseña incorrecta";
       }
    }else{
        $errores['email']="Email incorrecto";
    }

  }else{
    $_SESSION['errores']['general'] = "Ingrese los campos solicitados";
  }
}
  if(count($errores) >= 1){
    $_SESSION['errores'] = $errores;
  }
    
    header('Location: ../login_init.php');



?>