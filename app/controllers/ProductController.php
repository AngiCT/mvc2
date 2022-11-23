<?php
    namespace App\Controllers;
    use \App\Models\Product;
    use Dompdf\Dompdf;
    //require_once "../Product.php";
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
    public function pdf(){

        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Hola mundo</h1>');
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename=documento.pdf');
        $dompdf->render();
        $dompdf->stream();
    }
    function show(){
        echo '<br> Dentro de show de PRODUCTOCONTROLLER';
        $id = $_GET['id'];
        $product = Product::find($id);
        require "../views/show.php";
    }
}