<?php
    if(!isset($_SESSION)){
     session_start();
    }
    require_once 'php/includes/helpers.php';
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio-sesion.css">
    <link rel="stylesheet" href="css/respoonsive/inicio_sesion_responsive.css">
    <title>Iniciar sesión</title>
</head>
<body>
<?php require_once 'php/includes/header.php';  //contiene el menu?>

<main>
    <div class="wrap">
<?php  if(!isset($_SESSION['usuario'])): ?>

    <section class="form-sesion" >
        <h1>Identificate</h1>
        <form action="php/login.php" method="POST">
            <?php echo isset($_SESSION['errores']) ? showErrores($_SESSION['errores'],'general') : ''; ?>
            <label for="correo">Correo electrónico</label>
            <input type="email" name="email" id="email">
            <?php echo isset($_SESSION['errores']) ? showErrores($_SESSION['errores'],'email') : ''; ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <?php echo isset($_SESSION['errores']) ? showErrores($_SESSION['errores'],'password') : ''; ?>
            <input type="submit" value="Entrar">
        </form>
            <?php  deleteErrores(); ?>
    </section>
 <?php endif; ?> 
        <?php if(isset($_SESSION['usuario'])):?>
                <section class="container-form-datos">
                    <a href="php/cerrar-sesion.php" class="button btn-close">Cerrar Sesión</a>
                    <div style="clear: both"></div>
                    <h1>Bienvenido <?= $_SESSION['usuario']['nombre_estacion'] ?></h1>
                    <P class="description">
                        <strong>Nota:</strong> Use los siguientes campos para actualizar los precios
                        que se muestran en su pagina de inicio.
                    </P>
                    <form action="php/cambio-datos.php" method="POST" class="price">
                        <label for="producto-1">Magna</label>
                        <input type="number" min="0" step="0.01" name="precio-1" placeholder="Colocar solo numeros">
                        <label for="producto-2">Premium</label>
                        <input type="number" name="precio-2" min="0" step="0.01" name="precio-2" placeholder="Colocar solo numeros">
                        <label for="producto-3">Diesel</label>
                        <input type="number" name="precio-3" min="0" step="0.01" name="precio-3" placeholder="Colocar solo numeros">
                        <input type="submit" value="Guardar" >
                    </form>
                </section>
        <?php endif; ?>
    </div>
</main>



<?php require_once 'php/includes/footer.php';?>

</body>
<script src="js/inicio-sesion.js"></script>
</html>