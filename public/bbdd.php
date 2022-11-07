<?php
   
    require "../bbddcon.php";

    //recurso/metodo/parametro1/parametro2
    
    $sql = "select nombreusu, password from credenciales";
    $registros = $bd->query($sql);
    //$actualizar = "UPDATE 'credenciales' SET 'nombreusu'= 'usuario3' WHERE 'nombreusu' ='usuario2'";
    //$update = $bd->query($actualizar);
    echo '<br>Numero de regsistros devueltos: ' . $registros->rowCount();
    if($registros->rowCount()>0){
        foreach($registros as $fila){
            echo'<br>Nombre de usuario: ' . $fila['nombreusu'];
            echo'<br>Password: ' . $fila['password'];
        }
        //echo'<br>Fila nueva: ' . $update['nombreusu'];
    }else{
        echo'<br>No se ha devuelto ninguna fila';
    }
