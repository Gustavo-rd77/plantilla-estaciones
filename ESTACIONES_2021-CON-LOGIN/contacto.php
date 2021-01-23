
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icons/pemex_aditec.png" type="favicon/x-icon">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/respoonsive/contacto_responsive.css">
    <title>Contacto Master</title>
</head>
<body>
<?php 
        require_once 'php/includes/header.php'; //contiene el menu
?>
<main class="wrap">
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
                    <h2 class="title_container">Formulario de contacto <span id="status"></span></h3>
                    <form  class="form_contac" id="send_form"> 
                        <div class="form_data">
                            <label for="name">Nombre y Apellidos <span class="error"></span></label>  
                            <input type="text" name="name" required>
                            <label for="email">Correo <span class="error"></span></label>  
                            <input type="email" name="email" required>
                        </div>
                        <div class="form_data">
                            <label for="phone">Telefono <span class="error"></span></label>
                            <input type="tel" name="phone" required>
                            <label for="">Asunto</label>
                            <input type="text" name="case_1" required>
                        </div>
                        <div class="form_textarea form_data">
                            <label for="message">Mensaje</label>
                            <textarea name="msg" id="text" cols="30" rows="10" required></textarea>
                        </div>
                        <input type="submit" value="Enviar" id="send" >
                    </form>
                    <div class="privacy">
                        <input type="checkbox"  id="checkbox">
                       <span>Los datos personales que nos proporciona son utilizados estrictamente
                            en la realización de funciones propias de nuestra empresa y por ningún 
                            motivo serán transferidos a terceros.</span>
                        </div>
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
<script src="js/contacto.js"></script>
</html>