<?php
    require_once "Product.php";
 class Controller
 {
     

     function __construct()
     {
         //const vacío
     }
     //Función que: -Recoge todos los productos. -LLama a vista inventario
     public function home(){
         $products = Product::all();
         require "views/home.php";
     }
     //Función que: -Recuperar un producto en particular, el id como parámetro. -Llamar vista de un producto en concreto.
     public function show(){
        $id = $_GET["id"];
        $product = Product::find($id); //start.php
        require "views/show.php";
     }
 }
 