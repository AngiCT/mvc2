<?php
    //echo'<h2>Contenido PRIVADO</h2>';

    require_once "core/App.php";

    $app = new App();
    // /recurso/accion/parametro
    // recurso : controladores
    // accion : métodos de los controladores . controlador-> show()
    // parametros : find -> id de producto.
/*
    $app = new Controller();
    //defino variable de petición en la url

    //1- recoger el metodo que pasan como parámetro y si no especifican ningún cargar el método home
    if(isset($_GET["method"])){
        $method =  $_GET["method"]; //show, find, create, update...
    }else{
        $method = "home";
    }

    //2 - verificar que el método introducido existe
    if(method_exists($app, $method)){
        $app->$method();
    }else{
        http_response_code(404);
        die("Método no encontrado"); //exit
    }
*/