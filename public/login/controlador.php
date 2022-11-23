<?php
 use PDO;
 $dsn = "mysql:dbname=agenda;host=db";
 $usuario = "root";
 $clave = "password";

 try {
    $conexion = new PDO($dsn,$usuario,$clave);
    echo 'Exito';
    if(!empty($_POST['btnIngresar'])){
        if (empty($_POST['usuario']) and empty($_POST['password'])) {
            echo '<div>LOS CAMPOS ESTAN VACIOS</div>';
        } else {
            $usuario = $_POST['usuario'];
            $clave = md5($_POST['password']);
     
            $sql = $conexion->execute("select * from credenciales where usuario=$usuario and password= $clave");
            if ($datos=$sql->fetch_object()) {
                header("Location: inicio.php");
            } else {
                echo 'Aceso denegado';
            }
           
        }
    }
    
 }catch (PDOException $e) {
    echo 'Mensaje de la excepción: ' . $e->getMessage();
    exit();
}
