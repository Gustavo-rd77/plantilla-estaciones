<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio-sesion.css">
    <title>Iniciar sesión</title>
</head>
<body>
<?php require_once 'php/includes/header.php'; //contiene el menu?>

<main>
    <div class="wrap">
    <section class="form-sesion" >
        <form action="login.php" method="POST">
            <label for="correo">Correo electrónico</label>
            <input type="email" name="email" id="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Entrar">
        </form>

    </section>
    </div>
</main>



<?php require_once 'php/includes/footer.php';?>

</body>
</html>