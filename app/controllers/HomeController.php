<?php

namespace App\Controllers;

class HomeController{
    function __construct()
    {
       echo'<br>Constructor clase HOMECONTROLLER';   
    }//FIN_CONSTRUCTOR

    function index(){
        echo '<br>Dentro de index de HOMECONTROLLER';
        require "../app/views/home.php";
        // metodo home de Controller de mvc00.
        
    }//fin_index

    function show(){
        echo '<br> Dentro de show de HOMECONTROLLER';
    }
}