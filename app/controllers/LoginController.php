<?php
namespace App\Controllers;

class LoginController{
    function __construct()
    {
       echo'<br>Constructor clase LOGINCONTROLLER';   
    }//FIN_CONSTRUCTOR

    function index(){
        echo '<br>Dentro de index de LOGINCONTROLLER';
        // metodo home de Controller de mvc00.
    }//fin_index

    function show(){
        echo '<br> Dentro de show de LOGINCONTROLLER';
    }
}