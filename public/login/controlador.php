<?php
 use PDO;
 $dsn = "mysql:dbname=agenda;host=db";
 $usuario = "root";
 $clave = "password";
 
 if(!empty($_POST['btnIngresar'])){
     if (empty($_POST['usuario']) and empty($_POST['password'])) {
         echo '<div class="alert alert">LOS CAMPOS ESTAN VACIOS</div>';
     } else {
         $usuario = $_POST['usuario'];
         $clave = md5($_POST['password']);
  
         $sql = $conexion->query("select * from usuario where usuario=$usuario and clave= $clave");
         if ($datos=$sql->fetch_object()) {
             header("Location: inicio.php");
         } else {
             echo 'Aceso denegado';
         }
        
     }
    
 }
 