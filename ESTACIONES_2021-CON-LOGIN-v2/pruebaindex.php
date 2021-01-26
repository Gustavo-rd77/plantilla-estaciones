   
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title>ESTACION PEMEX</title>
</head>
<body>
   <?php 
        require_once 'php/includes/header.php'; //contiene el menu
    ?>
    <main class="">
    <section class="container-slider owl-carousel">
        <div class="slick-track ">
        <img src="img/slider/slider1.png">
        <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track ">
        <img src="img/slider/slider2.jpg">
        <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track ">
        <img src="img/slider/slider3.jpg">
        <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion</p>
        </div>
        </div>
        <div class="slick-track">
        <img src="img/slider/slider4.jpg">
        <div class="name-estacion"> 
            <h1>NOMBRE DE ESTACION</h1>
            <p># estacion1</p>
        </div>
        </div>
    </section>

    <section class="wrap">
    
        <section class="container_about">
            <h2 class="title_container">Sobre Nosotros</h2>
            <div class="flex-1">
            <article class="text_about">
                  <div class="text_mv">
                    <h3>Misión</h3>
                    <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.
                     Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                  </div>  
                  <div class="text_mv">
                    <h3>Visión</h3>
                    <p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae.
                     Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
                  </div>  
            </article>
            <div class="img_about">
                <img src="img/mision-vision/img1.png" alt="">
            </div>
            </div>
        </section>

        <section class="container_contac" >
            <h2 class="title_container">Contacto</h2>
            <article class="contac_data">
                <div class="contact_flex">
                <div class="contact">
                    <h3>Dirección</h3>
                    <p>Av 20 de Noviembre,#55</p>
                    <p> Ig.Zaragoza</p>
                    <p> Puebla pue</p>
                </div>
                <div class="contact">
                    <h3>Telefono</h3>
                    <p>2929932197</p>
                </div>
                <div class="contact">
                    <h3>Correo electronico</h3>
                    <p>estacion@estacion.com</p>
                </div>
                </div>
                <div class="container_form">
                    <h3>Formulario de contacto</h3>
                    <form action="" method="post" class="form_contac">
                        <div class="form_data">
                            <label for="name">Nombre y Apellidos</label>
                            <input type="text">
                            <label for="email">Correo</label>
                            <input type="email">
                        </div>
                        <div class="form_data">
                            <label for="phone">Telefono</label>
                            <input type="tel">
                            <label for="">Asunto</label>
                            <input type="text">
                        </div>
                        <div class="form_textarea form_data">
                            <label for="message">Mensaje</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
                <div class="container_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4523465452817!2d-98.20042038509933!3d19.043839287106366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0e79802f289%3A0x7a4c1293b30a34d6!2sZ%C3%B3calo%20de%20Puebla!5e0!3m2!1ses-419!2smx!4v1610127558271!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </article>
        </section>
    </section>

    </main>
    <?php require_once 'php/includes/footer.php';?>

</body>
<script src="js/lib/jquery-3.5.1.min.js"></script>
<script src="js/lib/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

</html>