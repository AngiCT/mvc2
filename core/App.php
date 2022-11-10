<?php
//Si la url no especifica ningún controlador(recurso) => asigno un por defecto => home
//Si no la url no especifica ningún método => asigno por defecto : index
class App{
    function __construct()
    {
        // http://mvc.local/product/show => http://mvc.local/index.php?url=product/show
        if(isset($_GET["url"]) && !empty($_GET["url"])){
            $url = $_GET["url"];
        }else{
            $url = "home";
        }
        // /product/show/5 -> product: recurso ; show: action ; 5: parámetro
        $arguments = explode('/', trim($url, '/'));
        $controllerName = array_shift($arguments); // product ; ProductController
        $controllerName = ucwords($controllerName) . 'Controller';
        if(count($arguments)){
            $method = array_shift($arguments); // show
        }else{
            $method = 'index';
        }

        //voy a cargar el controlador. ProductController.php
        $file = "app/controllers/$controllerName". ".php";
        if(file_exists($file)){
            require_once $file; // importo el fichero si existe
        }else{
            http_response_code(404);
            die("No encontrado");
        }

        //existe el método en el controlador ?
        $controllerObject = new $controllerName(); // objeto de la clase
        if(method_exists($controllerObject,$method)){
            $controllerObject->$method($arguments); //method ok-> lo invoco. //No hace falta meter el $arguments en el $method.
        }else{
            http_response_code(404);
            die("No encontrado");
        }
    }//fin __construct

}//fin clase