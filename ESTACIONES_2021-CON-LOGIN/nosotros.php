<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icons/pemex_aditec.png" type="favicon/x-icon">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/respoonsive/nosotros_responsive.css">
    <title> Nosotros Gasolinera Master</title>
</head>
<body>
<?php 
        require_once 'php/includes/header.php'; //contiene el menu
?>
<main>
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
                <img src="img/nosotros/img1.png" alt="">
            </div>
            </div>
        </section>

        <section class="container_team">
            <h2 class="title_container">Nuestro equipo</h2>
            <article class="team"> 
                <div class="team_img">
                    <img src="img/nosotros/team/team.svg" alt="">
                </div>
                <div class="team_img">
                    <img src="img/nosotros/team/team.svg" alt="">
                </div>
                <div class="team_img">
                    <img src="img/nosotros/team/team.svg" alt="">
                </div>
            </article>
        </section>
</section>
</main>
<?php require_once 'php/includes/footer.php';?>
</body>
<script src="js/nosotros.js"></script>
</html>