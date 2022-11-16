<?php

    namespace Dwes\Galaxias;

    echo '<br> Namespace actual: ' . __NAMESPACE__;

    /*
        Direccionamiento namespace:
        1 - Sin direccionamiento.
        2 - Direccionamiento relativo.
        3 - Direcionamiento absoluto.
    */

    include "galaxia1.php";

    //Sin direccionamiento.
    echo '<h2> Sin direccionamiento </h2>';
    echo '<br>Radio de la galaxia: ' . RADIO;
    observar("Via Lactea");
    $gl = new Galaxia;
    Galaxia::muerte();

    //Direccionamiento relativo. Navego a partir de mi ubicación actual.
    echo '<h2>Direccionamiento relativo. </h2>';

    include 'pegaso/pegaso.php';
    echo '<br>Radio de la galaxia: ' . Pegaso\RADIO;
    Pegaso\observar("Via Lactea");
    $gl = new Pegaso\Galaxia;
    Pegaso\Galaxia::muerte();

    // Navego desde el direcorio raíz del servidor web.
    echo '<h2>Direccionamiento absoluto. </h2>';
    
    echo '<br>Radio de la galaxia: ' . \Dwes\Galaxias\Pegaso\RADIO;
    \Dwes\Galaxias\Pegaso\observar("Via Lactea");
    $gl = new \Dwes\Galaxias\Pegaso\Galaxia;
    \Dwes\Galaxias\Pegaso\Galaxia::muerte();
     echo '<br>';
    use const \Dwes\Galaxias\Pegaso\RADIO;
    echo '<br>El radio es: ' . RADIO;
    use function \Dwes\Galaxias\Pegaso\observar;
    echo '<br>Observo en pegaso: ' . observar('Otra galaxia');
    use \Dwes\Galaxias\Galaxia;
    echo '<br>Objeto de galaxia generico: ' . new Galaxia();

    //Apodar namespace -> alias
    use \Dwes\Galaxias\Pegaso as Seiya;
    Seiya\observar("Observando a Seiya");

