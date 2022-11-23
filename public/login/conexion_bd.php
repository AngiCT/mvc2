<?php
 
 $dsn = "mysql:dbname=agenda;host=db";
 $usuario = "root";
 $clave = "password";

 try {
    $conexion = new PDO($dsn,$usuario,$clave);
    echo 'Exito';
    
 }catch (PDOException $e) {
    echo 'Mensaje de la excepción: ' . $e->getMessage();
    exit();
}