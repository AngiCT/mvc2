<?php
    echo'<h2>Contenido PRIVADO</h2>';
    require_once "../Controller.php";

    // /recurso/accion/parametro
    // recurso : controladores
    // accion : métodos de los controladores . controlador-> show()
    // parametros : find -> id de producto.

    $app = new Controller();
    //defino variable de petición en la url
    if(isset($_GET["method"])){
        $method =  $_GET["method"]; //show, find, create, update...
        $app-> $method;
    }
