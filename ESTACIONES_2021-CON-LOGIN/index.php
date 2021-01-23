<?php 
    include_once 'php/includes/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icons/pemex_aditec.png" type="favicon/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/respoonsive/inicio_responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="js/lib/jquery-3.5.1.min.js"></script>
    <script src="js/lib/owl.carousel.min.js"></script>
  
    <title>Gasolinera Master</title>
</head>
<body>
<?php 
        require_once 'php/includes/header.php'; //contiene el menu
?>
<main>  
    <section class="owl-carousel container-slider">
        <div class="slick-track">
            <img src="img/slider/slider1.png" alt="">
            <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track">
            <img src="img/slider/slider2.jpg" alt="">
            <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track">
            <img src="img/slider/slider3.jpg" alt="">
            <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track">
            <img src="img/slider/slider4.jpg" alt="">
            <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
    </section>
    <h2 class="title_container ">Los mejores precios</h2>
    <div class="background-totem">
        <div class="containner-totem">       
            <div class="containner-totem_img">
                <img  src="img/logo_estacion/pemex_aditec.png" alt="" >
            </div>
                <h2 class="title-totem">PRECIO HOY <span id="date"></span></h2>
                <p class="title-totem">Permiso de la CRE</p>
            <div class="containner-totem_info">
                <div class="container-marca color-m1">
                        <P class="class_gas">Clase de Gasolina</P>
                </div>
                <div class="container-num">
                    <p class="price">
                        <?php echo $precios["coste_1"]; ?>
                    </p>
                </div>
                <div class="container-marca color-m2">
                        <P class="class_gas">Clase de Gasolina</P>
                </div>
                <div class="container-num">
                    <p class="price">
                    <?php echo $precios["coste_2"]; ?>
                    </p>
                </div>
                <div class="container-marca color-m3">
                        <P class="class_gas">Clase de Gasolina</P>
                </div>
                <div class="container-num">
                    <p class="price">
                    <?php echo $precios["coste_3"]; ?>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <section class="wrap">
        <section class="container_servicios">
            <article class="servicios">
                <div class="background-servicios">
                <h2 class="title_container ">Calidad</h2>
                <i class="fas fa-gas-pump"></i>
                </div>
                <p class="show-text">In vestibulum risus et nisi ornare, a facilisis eros iaculis.
                 Cras gravida venenatis luctus. Sed pharetra libero in velit
                 convallis facilisis. Nunc accumsan mauris ac magna aliquet 
                 posuere. Morbi interdum, sapien sit amet cursus fringilla,
                turpis ligula pulvinar tortor, quis eleifend neque libero a ante.
                </p>
            </article>
            <article class="servicios">
                <div class="background-servicios">
                <h2 class="title_container ">Integridad</h2>
                <i class="fas fa-gas-pump"></i>
                </div>
                <p class="show-text">In vestibulum risus et nisi ornare, a facilisis eros iaculis.
                 Cras gravida venenatis luctus. Sed pharetra libero in velit
                 convallis facilisis. Nunc accumsan mauris ac magna aliquet 
                 posuere. Morbi interdum, sapien sit amet cursus fringilla,
                turpis ligula pulvinar tortor, quis eleifend neque libero a ante.
                </p>
            </article>
        </section>

        <a href="inicio-sesion.php" class="button-sesion">Iniciar sesion</a>
    </section>

</main>
<?php require_once 'php/includes/footer.php';?>
</body>
<script src="js/main.js"></script>
</html>