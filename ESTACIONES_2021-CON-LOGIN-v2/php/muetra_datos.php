<?php
    $sql = "SELECT * FROM precio_gasolina_actual WHERE usuario_id IN(Select id FROM usuarios WHERE nombre_estacion = 'Gasolinera Master')";
    $precios = mysqli_query($db,$sql);
    $precios =  mysqli_fetch_assoc($precios);
    $precio_producto1 = $precios['producto_1'];
    $precio_producto2 = $precios['producto_2'];
    $precio_producto3 = $precios['producto_3'];
    
?>