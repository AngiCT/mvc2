<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>BIENVENIDO</h2>
        <?php
            include("conexion_bd.php");
            include("controlador.php");
        ?>
        <div>
            <h5>Usuario</h5>
            <input type="text" id="usuario" class="input" name="usuario">
            <h5>Contraseña</h5>
            <input type="password" name="password" id="input" class="input">
            <input name="btnIngresar" type="submit" value="INICIAR SESION">
        </div>
    </form>
</body>
</html>
