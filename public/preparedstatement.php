<?php

 $dsn = "mysql:dbname=demo;host=db";
 $usuario = "dbuser";
 $password = "secret";

 /*
    1- preparar la consulta -> prepare
    2- vincular los datos -> bindParam / bindValue  
    3- ejecutar la sentencia -> execute(); (query, exec)
 */
 try {
     $db = new PDO($dsn,$usuario,$password);
     //establece el nivel de error que muestra en la conexión.
     $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //preparación por nombre
     $sentencia = $db->prepare("INSERT INTO credenciales (nombreusu,password) VALUES (:nombre,:clave)");
     //preparacion por posicion
     //$sentencia = $db->prepare("INSERT INTO credenciales (nombreusu,password) VALUES (? , ?)");

     $nombre = "Angela";
     $clave1 = "klk";
     //Cuando la sentencia va por (? , ?)
     //$sentencia->bindValue(1,$nombre);
     //$sentencia->bindValue(2,$clave1);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":clave", $clave1);
     //preparacion + ejecucion: execute(array[datos])

     //$nombre = "Pedro";
     //$clave1 = "789";
     //$sentencia->execute(); //ejecutar la sentencia.
    $sentencia->execute(array(':nombre' => $nombre, ':clave' => $clave1));
     echo '<h2>Exito</h2>';
     

 } catch (PDOException $e) {
     echo 'Error producido al conectar: ' . $e->getMessage();
 }