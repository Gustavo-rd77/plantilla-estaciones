<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    
    $server='hp276';
    $username='mycae921_admin_estaciones_precio';
    $password='4;5?43z1GVMy';
    $database='mycae921_estaciones_precio_gasolina';

    // $server='localhost';
    // $username='root';
    // $password='';
    // $database='gasolineras_clientes';
    $db = mysqli_connect($server,$username,$password,$database);
    if(!$db){
        $error_conexion="Error de conexión";
        

    }else{
        mysqli_query($db,"SET NAMES 'utf8'");
        // $sql="SELECT coste_1,coste_2,coste_3 FROM precio_gasolina WHERE nombre_estacion = 'Master'";
        // $precios=mysqli_query($db,$sql);
        // $precios=mysqli_fetch_assoc($precios);
        
    }
?>