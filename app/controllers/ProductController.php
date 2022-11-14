<?php
    require_once "../Product.php";
class ProductController{
    function __construct()
    {
       //echo'<br>Constructor clase PRODUCTOCONTROLLER';   
    }//FIN_CONSTRUCTOR

    function index(){
        //echo '<br>Dentro de index de PRODUCTOCONTROLLER';
        // metodo home de Controller de mvc00.
        $products = Product::all();
        require "../views/product.php";
    }//fin_index

    function show(){
        echo '<br> Dentro de show de PRODUCTOCONTROLLER';
        $id = $_GET['id'];
        $product = Product::find($id);
        require "../views/show.php";
    }
}